<?php
/*
 *   Jamshidbek Akhlidinov
 *   26 - 11 2023 8:44:42
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace app\modules\bot\controllers;


use common\models\FarmTelegramBotUser;
use common\models\User;
use Yii;
use yii\web\Controller;
use yii\web\Response;
use zafarjonovich\Telegram\BotApi;
use zafarjonovich\Telegram\Keyboard;
use zafarjonovich\Telegram\update\objects\Chat;
use zafarjonovich\Telegram\update\Update;

class BotController extends Controller
{
    public $enableCsrfValidation = false;

    public ?BotApi $botApi;

    public ?FarmTelegramBotUser $botUser;

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        Yii::$app->response->format = Response::FORMAT_JSON;
        Yii::$app->language = 'uz';
    }

    public function initVariables()
    {
        $this->botApi = new BotApi("6983540930:AAEFoP_Dr6DjqExqdJJi7SZkZ1j4oonOtfo");
        $this->botApi->update = new Update($this->botApi->getWebHookUpdate());
        $this->botApi->invokeUpdates();
        $this->botUser = FarmTelegramBotUser::findOne([
            'telegram_id' => $this->botApi->from_id,
        ]);
        return true;
    }

    public function actionIndex()
    {
        $this->initVariables();
        $update = $this->botApi->update;

        try {
            if ($update->isMessage()) {
                $message = $update->getMessage();
                $type = $message->getChat()->getType();
                $text = $message->isText() ? $message->getText() : '';
                $userProfile = $message->getFrom();
                $bot = $this->botApi;
                $user_id = $bot->from_id;

                if ($this->botUser == null) {
                    $user = new FarmTelegramBotUser([
                        'telegram_id' => "" . $userProfile->getId(),
                        'created_at' => date('Y-m-d H:i:s')
                    ]);

                    if ($user->save()) {
                        $this->botUser = $user;
                    }
                }

                if ($message->isFrom() && $type == Chat::TYPE_PRIVATE) {

                    if ($text == "/start" || $text == "Ortga" || $text == "Chiqish") {
                        $this->botUser->step = 0;
                        $this->botUser->save();
                        $menuKeyBoard = new Keyboard();
                        $menuKeyBoard->addCustomButton("Fermerlar");
                        $menuKeyBoard->newRow();
                        $menuKeyBoard->addCustomButton("Sotuvchilar");
                        $menuKeyBoard->newRow();
                        $menuKeyBoard->addCustomButton("Kirish");
                        $text_message = "Assalomu alaykum. Botimizga hush kelibsiz. Bu bot orqali fermerlar va sotuvchilar haqida to'liq va ishonchi malumotlarni olishingiz mumkun.";
                        $bot->sendMessage($user_id, $text_message, [
                            'reply_markup' => $menuKeyBoard->init()
                        ]);
                    }else

                    if ($text == "Fermerlar" || $text == "Sotuvchilar") {
                        $menuKeyBoard = new Keyboard();
                        $menuKeyBoard->addCustomButton("Yangiliklar");
                        $menuKeyBoard->newRow();
                        $menuKeyBoard->addCustomButton("Maxsulotlar");
                        $menuKeyBoard->newRow();
                        $menuKeyBoard->addCustomButton("Ortga");
                        $text_message = "Yangiliklar va Maxsulotlar haqida malumot olishigiz mumkun";
                        $bot->sendMessage($user_id, $text_message, [
                            'reply_markup' => $menuKeyBoard->init()
                        ]);
                    }else
                    if ($text == "Kirish") {
                        $this->botUser->step = 10;
                        $this->botUser->save();
                        $menuKeyBoard = new Keyboard();
                        $menuKeyBoard->addCustomButton("Ortga");
                        $text_message = "Platforma orqali olgan maxsus tokenni kiriting";
                        $bot->sendMessage($user_id, $text_message, [
                            'reply_markup' => $menuKeyBoard->init()
                        ]);
                    }else

                    if ($this->botUser->step == 10 && $platformUser = User::findOne(['verification_token' => $text])) {
                        $this->botUser->step = 0;
                        $this->botUser->platform_user_id = $platformUser->id;
                        $this->botUser->save();
                        $menuKeyBoard = new Keyboard();
                        $menuKeyBoard->addCustomButton("Fermerlar");
                        $menuKeyBoard->newRow();
                        $menuKeyBoard->addCustomButton("Sotuvchilar");
                        $menuKeyBoard->newRow();
                        $menuKeyBoard->addCustomButton("Chiqish");
                        $text_message = "Assalomu alaykum <b> {$platformUser->fullName}</b> botimizga hush kelibsiz. Bu bot orqali fermerlar va sotuvchilar haqida to'liq va ishonchi malumotlarni olishingiz mumkun.";
                        $bot->sendMessage($user_id, $text_message, [
                            'reply_markup' => $menuKeyBoard->init(),
                            'parse_mode' => 'html',
                        ]);
                    } elseif ($this->botUser->step == 10 && User::findOne(['verification_token' => $text]) == null) {
                        $this->botUser->step = 0;
                        $this->botUser->platform_user_id = 0;
                        $this->botUser->save();
                        $menuKeyBoard = new Keyboard();
                        $menuKeyBoard->addCustomButton("Fermerlar");
                        $menuKeyBoard->newRow();
                        $menuKeyBoard->addCustomButton("Sotuvchilar");
                        $menuKeyBoard->newRow();
                        $menuKeyBoard->addCustomButton("Kirish");
                        $text_message = "Uzr. Bunday user topilmadi.";
                        $bot->sendMessage($user_id, $text_message, [
                            'reply_markup' => $menuKeyBoard->init()
                        ]);
                    }else


                    if ($text == "Yangiliklar" || $text == "Maxsulotlar" || $text == "Oldingisi" || $text == "Keyingisi") {
                        $menuKeyBoard = new Keyboard();
                        $menuKeyBoard->addCustomButton("Oldingisi");
                        $menuKeyBoard->addCustomButton("Keyingisi");
                        $menuKeyBoard->newRow();
                        $menuKeyBoard->addCustomButton("Ortga");
                        $text_message = "<b>Surxondaroda paxta rejasini bajargan fermerga avtomobil berildi</b>";
                        $text_message .= "“Botosh lochini” fermer xo‘jaligi shartnomaviy rejani 100 foizga bajardi.
TOShKENT, 6 sen — Sputnik. Surxondaryo viloyatida paxta rejasini bajargan fermerga “Cobalt” topshirildi, deya xabar berdi viloyat hokimligi.
Oltinsoy tumani “Paxtakor” hududidagi “Botosh lochini” fermer xo‘jaligi 44,8 gektar paxta maydonidan 187,4 tonna hosil olib, 3-sentabr kuni shartnomaviy rejani 100 foizga bajardi.
O‘rtacha hosildolik 44 sentnerni tashkil etgan bo‘lib, hozirda 1-terim ishlari davom etmoqda.";
                        $photo = "https://cdn1.img.sputniknews.uz/img/07e7/09/06/38611647_107:155:1273:811_1920x0_80_0_0_000e9f67d996b199f930645d10705590.jpg.webp";
                        $bot->sendPhoto($user_id, $photo, [
                            'caption' => $text_message,
                            'reply_markup' => $menuKeyBoard->init(),
                            'parse_mode' => 'html',
                        ]);
                    }
                }
            }
        } catch (\Exception $exception) {
            print_r($exception);
            return false;
        }
        return "Success running Bot";
    }
}