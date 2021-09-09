<?php
function ftpcopy($uftp, $pftp, $nftp, $file) {
    if($nftp == 'VO') {
        //voe.sx
        $sftp = 'ftp.voe-network.net';
    } elseif($nftp == 'SB') {
        //streamsb.com
        $sftp = 'ftp.streamsb.com';
    } else {
        //add more
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
//file.mp4 same as filename in streamtape
//VO another name for ftp.voe-network.net
//other ftp account
echo ftpcopy('user', 'pass', 'VO', 'file.mp4');
