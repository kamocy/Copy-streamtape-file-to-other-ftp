<?php
function ftpcopy($uftp, $pftp, $nftp, $file) {
    if($nftp == 'VO') {
        $sftp = 'ftp.voe-network.net';
    } elseif($nftp == 'SB') {
        $sftp = 'ftp.streamsb.com';
    } else {
        $sftp = '0';
    }
    //streamtape ftp account
    $ftploc = 'ftp://streamtapeftpUser:streantapeftpPass@ftp.streamtape.com/';
    $ftpout = 'ftp://'.$uftp.':'.$pftp.'@'.$sftp.'/';
    if(@copy($ftploc.$file, $ftpout.$file)) {
        $ret = $file.' '.$nftp.' Success<br/>';
    } else {
        $ret = $file.' '.$nftp.' Errors<br/>';
    }
    return $ret;
}
//other ftp account
echo ftpcopy('user', 'pass', 'VO', 'file.mp4');
