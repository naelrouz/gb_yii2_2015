<?php /*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace frontend\components;
use yii\base\Component;
/**
 * Description of Components
 *
 * @author nael
 */
class Common extends Component{
    public static function sendMail($email,$subject,$body,$name='') {
        \Yii::$app->mail->compose()
                ->setFrom([\Yii::$app->params['supportEmail'] => \Yii::$app->name])
                ->setTo([$email => $email])
                ->setSubject($subject)
                ->setTextBody($body)
                ->send();
        
    }
}
