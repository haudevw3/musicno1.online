<?php

namespace Modules\User\Service\Contracts;

interface UserService
{
    /**
     * @param  array  $data
     * @param  bool   $needSendMail
     * @return \Jenssegers\Mongodb\Eloquent\Model
     */
    public function create(array $data, $needSendMail = false);

    /**
     * @param  string  $id
     * @param  array   $data
     * @return bool
     */
    public function updateOne($id, array $data);

    /**
     * @param  string  $id
     * @return bool
     */
    public function deleteOne($id);

    /**
     * @param  array  $data
     * @return \Core\Http\ResponseBag
     */
    public function verifyAccount(array $data);

    /**
     * @param  string  $email
     * @return \Core\Http\ResponseBag
     */
    public function forgetPassword(string $email);

    /**
     * @param  string  $data
     * @return \Core\Http\ResponseBag
     */
    public function refreshTokenToSendMail(string $id);
}