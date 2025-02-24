<?php

namespace Mixno35\Validator\Rules\Email;

use Mixno35\Validator\Interfaces\RuleInterface;

class EmailTemp implements RuleInterface
{

    protected array $tempMails = [
        '10minutemail.com', '10minutemail.net', '10minutemail.co.uk', '10minutemail.de',
        '20minutemail.com', '24hourmail.com', '2prong.com', '33mail.com', '3mailapp.net',
        '4warding.com', '4warding.net', '4warding.org', '5mail.xyz', '60minutemail.com', '99email.com',
        'anonbox.net', 'anonymbox.com', 'binkmail.com', 'bobmail.info', 'bofthew.com', 'bugmenot.com',
        'chacuo.net', 'chibakenma.ml', 'cool.fr.nf', 'courriel.fr.nf', 'cubic.com',
        'dayrep.com', 'deadaddress.com', 'despam.it', 'discard.email', 'discardmail.com',
        'disposeamail.com', 'disposable-email.com', 'disposable-mail.com',
        'disposableemailaddresses.com', 'disposableinbox.com', 'dodgeit.com',
        'dodgit.com', 'drdrb.com', 'dropmail.me', 'e4ward.com', 'easytrashmail.com',
        'email60.com', 'emailigo.de', 'emailinfive.com', 'emailmiser.com',
        'emailsensei.com', 'emailtemporario.com.br', 'emailtemporar.ro',
        'emailthe.net', 'emailtmp.com', 'emailwarden.com', 'emailxfer.com',
        'fakeinbox.com', 'fakeinformation.com', 'fastacura.com', 'fastnissan.com',
        'fasttoyota.com', 'fr.nf', 'get1mail.com', 'get2mail.fr', 'getairmail.com',
        'getmails.eu', 'getonemail.com', 'gettempmail.com', 'gettymail.com',
        'gishpuppy.com', 'grr.la', 'guerrillamail.biz', 'guerrillamail.com',
        'guerrillamail.de', 'guerrillamail.net', 'guerrillamail.org',
        'guerrillamailblock.com', 'hidemyass.com', 'hotpop.com', 'hulapla.de',
        'icantbelieveineedtoexplainthis.com', 'imails.info', 'incognitomail.com',
        'incognitomail.net', 'ipoo.org', 'jetable.com', 'jetable.net',
        'jetable.org', 'kasmail.com', 'klzlk.com', 'kurzepost.de', 'linshi-email.com',
        'linshiyouxiang.net', 'mail-temporaire.fr', 'mail.by', 'mail.mezimages.net',
        'mail.salu.net', 'mail1a.de', 'mail21.cc', 'mail2rss.org', 'mail333.com',
        'mailcatch.com', 'mailde.de', 'mailde.info', 'mailde.org', 'maildrop.cc',
        'maildx.com', 'maileater.com', 'mailexpire.com', 'mailinator.com',
        'mailinator.net', 'mailinator.org', 'mailinator2.com', 'mailmetrash.com',
        'mailnesia.com', 'mailsac.com', 'mailspeed.ru', 'mailtemp.info',
        'mailtome.de', 'mailtothis.com', 'mailtrash.net', 'mailtv.net',
        'mailtv.tv', 'mailzilla.com', 'mailzilla.org', 'max-mail.com',
        'mbx.cc', 'meltmail.com', 'messagebeamer.de', 'minutemail.com',
        'mohmal.com', 'monemail.fr.nf', 'monmail.fr.nf', 'mt2009.com',
        'my10minutemail.com', 'mytemp.email', 'mytrashmail.com',
        'neomailbox.com', 'no-spam.ws', 'nobulk.com', 'noclickemail.com',
        'nogmailspam.info', 'nomail.xl.cx', 'nomail2me.com', 'notmailinator.com',
        'nowmymail.com', 'nospam4.us', 'nospamfor.us', 'nospammail.net',
        'nowhere.org', 'onewaymail.com', 'owlpic.com', 'pjjkp.com', 'pokemail.net',
        'politikerclub.de', 'prtnx.com', 'qq.com', 'quickinbox.com',
        'realemail.net', 'reconmail.com', 'recursor.net', 'rtrtr.com',
        's0ny.net', 'safe-mail.net', 'safetymail.info', 'sharklasers.com',
        'shitmail.me', 'shortmail.net', 'sibmail.com', 'slopsbox.com',
        'smellfear.com', 'sneakemail.com', 'snkmail.com', 'sofimail.com',
        'soodonims.com', 'spam4.me', 'spamavert.com', 'spambob.com',
        'spambob.net', 'spambob.org', 'spambog.com', 'spambog.de',
        'spambog.net', 'spambog.ru', 'spambox.info', 'spambox.irish',
        'spamcannon.com', 'spamcannon.net', 'spamcero.com', 'spamcon.org',
        'spamcorptastic.com', 'spamcowboy.com', 'spamcowboy.net',
        'spamcowboy.org', 'spamday.com', 'spamdecoy.net', 'spamex.com',
        'spamfree24.com', 'spamfree24.de', 'spamfree24.info', 'spamfree24.net',
        'spamfree24.org', 'spamgoes.in', 'spamherelots.com', 'spamhereplease.com',
        'spamhereplease.net', 'spamhouse.com', 'spamify.com', 'spaminator.de',
        'spamkill.info', 'spaml.com', 'spaml.de', 'spammotel.com',
        'spamobox.com', 'spamsalad.in', 'spamslicer.com', 'spamsphere.com',
        'spamspot.com', 'spamthis.co.uk', 'spamthisplease.com', 'supergreatmail.com',
        'supermailer.jp', 'suremail.info', 'tagyourself.com', 'talkinator.com',
        'teleworm.com', 'temp-mail.com', 'temp-mail.de', 'temp-mail.org',
        'temp-mail.ru', 'tempe-mail.com', 'tempemail.co.za', 'tempemail.com',
        'tempemail.net', 'tempinbox.com', 'tempmail.de', 'tempmail.eu',
        'tempmail.it', 'tempmail.net', 'tempmail.org', 'tempmail.us',
        'tempmailaddress.com', 'tempmaildemo.com', 'tempmailo.com',
        'tempmails.de', 'tempomail.fr', 'temporaryemail.net', 'temporaryinbox.com',
        'temporarymailaddress.com', 'thanksnospam.info', 'thisisnotmyrealemail.com',
        'throwawayemailaddress.com', 'tmail.ws', 'tradermail.info', 'trash2009.com',
        'trashbox.eu', 'trashmail.com', 'trashmail.de', 'trashmail.me',
        'trashmail.net', 'trashmail.org', 'trashmail.ws', 'trashmailer.com',
        'trashymail.com', 'trashymail.net', 'trbvm.com', 'trillianpro.com',
        'tyldd.com', 'uggsrock.com', 'umail.net', 'uroid.com', 'veryrealemail.com',
        'viditag.com', 'viralplays.com', 'wegwerfmail.de', 'wegwerfmail.info',
        'wegwerfmail.net', 'wegwerfmail.org', 'whatiaas.com', 'whatsaas.com',
        'whopy.com', 'whyspam.me', 'yogamaven.com', 'yopmail.com',
        'yopmail.fr', 'yopmail.net', 'yuurok.com', 'zippymail.info'
    ];

    public function process($var): bool
    {
        if (!function_exists('explode') ||
            !function_exists('in_array')
        ) {
            return false;
        }

        [$user, $domain] = explode('@', (string)$var);

        if (in_array($domain, $this->getTempMails())) {
            return false;
        }

        unset($user, $domain, $pathTempMails);

        return true;
    }

    private function getTempMails(): array
    {
        return $this->tempMails;
    }
}