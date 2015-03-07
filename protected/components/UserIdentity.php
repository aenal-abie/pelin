<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {

    private $_id;

//    private $_level_id;

    /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * are both 'demo'.
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     * @return boolean whether authentication succeeds.
     */
    public function authenticate() {

        $_users = User::model()->find('(username=:id or email=:id) and status="A"', array(':id' => $this->username));
        if (empty($_users)) {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } elseif (!User::validatePassword($this->password, $_users->password)) {
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        } else {
            $this->_id = $_users->id;
//            $this->_level_id = $_users->level_id;
            //$this->username = $_users->idPribadi->nama;
            $this->username = $this->username;
            $this->setState('nama', $_users->nama_lengkap);
            $this->setState('email', $_users->email);
//            $this->setState('level', $_users->level_id);
//            $this->setState('idPribadi', $_users->id_pribadi);
//            Yii::app()->session['id_pribadi'] = $_users->id_pribadi;
//            Yii::app()->session['level'] = $_users->level_id;
            $this->errorCode = self::ERROR_NONE;
        }
        return !$this->errorCode;
    }

    public function getID() {
        return $this->_id;
    }

}
