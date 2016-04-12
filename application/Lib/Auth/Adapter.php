<?php
class Lib_Auth_Adapter implements Zend_Auth_Adapter_Interface
{
    /**
     * @var string
     */
    protected $_login;

    /**
     * @var string
     */
    protected $_password;

    const SOL = 'H12&q';

    /**
     * @param $login
     * @param $password
     * @param Service_Admin_Users $serviceAdminUsers
     */
    public function __construct($login, $password, Service_Admin_Users $serviceAdminUsers)
    {
        $this->_login = $login;
        $this->_password = $password;
        $this->_service = $serviceAdminUsers;
    }

    /**
     * @return Zend_Auth_Result
     */
    public function authenticate()
    {
        try {
            $user = $this->_service->getItem(
                array('login' => $this->_login, 'hash' => $this->_getHash())
            );
            $messages = array();

            if ($user->id) {
                $identity = $user->id;
                $code = Zend_Auth_Result::SUCCESS;
                $messages[] = 'Authentication successful.';
            } else {
                $identity = null;
                $code = Zend_Auth_Result::FAILURE_IDENTITY_NOT_FOUND;
                $messages[] = 'A record with the supplied identity could not be found.';
            }
        } catch (Exception $e) {
            $identity = null;
            $code = Zend_Auth_Result::FAILURE_UNCATEGORIZED;
            $messages[] = 'Error during login';
        }

        return new Zend_Auth_Result($code, $identity, $messages);
    }

    /**
     * @return string
     */
    protected function _getHash()
    {
        return md5(md5($this->_login . self::SOL . $this->_password));
    }
}
