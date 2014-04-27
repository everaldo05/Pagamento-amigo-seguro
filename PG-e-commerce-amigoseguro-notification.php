<?php
/*
 ************************************************************************
 Copyright [2013] [AmigoSeguro Internet Ltda.]

 Licensed under the Apache License, Version 2.0 (the "License");
 you may not use this file except in compliance with the License.
 You may obtain a copy of the License at

 http://www.apache.org/licenses/LICENSE-2.0

 Unless required by applicable law or agreed to in writing, software
 distributed under the License is distributed on an "AS IS" BASIS,
 WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 See the License for the specific language governing permissions and
 limitations under the License.
 ************************************************************************
 */

require_once 'classes/model.php';

/**
 * Class Notification
 */
class notification extends wpsc_merchant
{

    /**
     * $post_notification['notificationType']
     * @var string
     */
    private $notification_type;

    /**
     * $post_notification['notificationCode']
     * @var string
     */
    private $notification_code;

    /**
     *
     * @var /model
     */
    private $_model;

    /**
     *
     * @var /AmigoSeguroAccountCredentials
     */
    private $_obj_credential;

    /**
     *
     * @var /AmigoSeguroNotificationType
     */
    private $_obj_notification_type;

    /**
     *
     * @var /AmigoSeguroNotificationService
     */
    private $_obj_transaction;

    /**
     *
     * @var integer
     */
    private $reference;

    /**
     * Init Notification
     * @param type $post_notification
     * @return array
     */
    function init($post_notification)
    {

        $this->load();
        $this->validatePost($post_notification);
        $this->createCredential();
        $this->createNotificationType();

        if ($this->_obj_notification_type->getValue() == $this->notification_type) {
            $this->createTransaction();
            return $this->updateCms();
        }
    }

    /**
     * Load
     */
    function load()
    {
        $this->_model = new model();
    }

    /**
     * validete if the post is empty
     */
    function validatePost($post_notification)
    {
        $this->notification_type = (isset($post_notification['notificationType']) && trim($post_notification['notificationType']) != "") ? trim($post_notification['notificationType']) : NULL;
        $this->notification_code = (isset($post_notification['notificationCode']) && trim($post_notification['notificationCode']) != "") ? trim($post_notification['notificationCode']) : NULL;
    }

    /**
     * Create Object Credential
     */
    function createCredential()
    {
        $this->_obj_credential = new AmigoSeguroAccountCredentials(get_option('ps_email'), get_option('ps_token'));
    }

    /**
     * Notification Type.
     */
    function createNotificationType()
    {
        $this->_obj_notification_type = new AmigoSeguroNotificationType();
        $this->_obj_notification_type->setByType("TRANSACTION");
    }

    /**
     * Transaction
     */
    function createTransaction()
    {
        include_once('AmigoSeguroLibrary/AmigoSeguroLibrary.php');
        $this->_obj_transaction = AmigoSeguroNotificationService::checkTransaction($this->_obj_credential, $this->notification_code);
        $this->reference = $this->_obj_transaction->getReference();
    }

    /**
     * Update CMS
     * @return array
     */
    function updateCms()
    {
        return array(
            'reference' => $this->reference,
            'status' => $this->_model->returnStatusCommerceByAmigoSeguro($this->_obj_transaction->getStatus()->getValue())
        );
    }
}
?>
