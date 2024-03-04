<?php

$aesKey = "vStssACffguE2XVITwhvKC6PqnGYsdYclICFSdd+xTo=";
$iv = "UdyUHkRSBD0is9cbI5xHKw==";

/*
class encData{
    public $iv;
    public $value;
    public $mac;
    //public $tag;
}
*/

function encrypt($plaintext, $aesKey, $iv) {

    $method = "AES-256-CBC";
    //$key = hash('sha256', $password, true);
    //$iv = openssl_random_pseudo_bytes(16);
    //$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('AES-256-CBC'));
    

    $ciphertext = openssl_encrypt($plaintext, $method, base64_decode($aesKey), OPENSSL_RAW_DATA, base64_decode($iv));
    //$ciphertext = "R9FMEfqLSXL3cCkR4iw8MBNsFineO0J7trnKCmHV1bVkueKF1OnaxhkkkI1d1akHd91kmcVK6oTSpoxmXEqRkvJyUUv0FIyRP2GRkmJ4BsalIi3akGRCM8G1nCi6zqD1hY0p6TyH5Gu+eQdf7Y4NEGf4KU/EZLLFLiQ8L/+29oUPDKmpdDsCDZSgs2NwwjZ7qYPN6q98JRA0hFioZclICoPLjXZ0Vheek0RkHejzEIWX4P+Jce0VmlD8sXFl2o1Hew6EhPYxtRuaqdeN6brIwq3ZDfcfaZkZJgoVauaG2PhClBUsstaze+WWXYrLn7CLFb+rpU6vfxu329Mxdzes+RLLoiyZ/saOyJCyDaW/FEdkmFreZrpT83vR4JroaVdzfQ6Nbv4RmLBcBuLqVQTd5BZ+Gdvbtsk3xSVTMU6TYdC71RuXZrEopmtfjykb/oYx3T4Fxb2hQpCoJMmhdZlmvdyBEHUhU/w9BP5Es8EjJqXsnfop4zqlApm4JFWPuAOOmW5zMXb+d2Vj3UZjgh7zuYcD9D1fLuOZ67DJnKjCmN36eju3EAzVMa1GLQ28HG+TW7M9qiR5rJWsmJP8ZW8HfRRJsvuQE92B1fyZ27ZLAYehTq4dtPlJm312uzdxDxo3c8IpYZ1DyOsmAuKeimiz9+WHwWaeTEkxhR24PEcy6GR/7L9zPVvln/fbSur8ia3juY8v3HWu/lhJRTFhmhJy4VedBVKetQigk4T244UGfLSP4DuML2R0m2vKJb7AYyaNSTd8/VPHUHE0pr80g/TbFcRh8D9pDQ0yCAHH4RRYW/7U/zMrnoEGZo26itOB27oV2lRa5i6zY/UF2y2/H9/nzencXoBi5WNmtP0e2AD2/SySchtDbgSPH+KYJH0jHcSBQMP95XNQDRhCGmUbCVEKLWMj1h+PyfkecgI2nl/qMDRjhAbYYOqcAdXbTo4Vf9lkDWwfS9IXzgmZuehGarnfVxzccH8K2GZM6hJnFzcA608PYJ1o8RgeIz/xtv1MadLQuMLoGk2FIYcOg8h0cPiJn6Kno5eU/8G4TpQyXOF3CMj6Lc/5y3ktotTC+q//YDTOxR3jPQs98SaK7p/H3rVxofkkiM8glIRqrRmtUvcV43Mdfk7PsX01e+hwFdzwklGu855z5iMSqS5fcOIJJviYAC3GjYNx3D7V95uZNEVq+lylrRIQ3QCFcNEoVFeNY9Ee1/pTWoclJgq/K8WGHjM1bw+wEDKNapi0Qy207939ZZOh2M2J9iEDjMEmIZAWKQKaiuA5jgzNISKpMU8/VhCP4fHsFhQBMzXQFsKcCFc7QkkgYK5bOxqi08axp45eTtBjPRFmi5PUXA8ljfYB1WGW9gp32chfMkAogL+E5TmTtXIVPJfdlm6HwUDs4XzlCOMvO4QMGYfoVt11NamnQ3IonynleyXtiZJVRCQwde93zTSwjG84+w1KdaMrQ3u/GzTkShrUsLhlJnmT2pewaWXQIUoo4JExlknOq5or1Gw+2UDGYISc366R/9iMTiKqTnhU7DrdNANghrdEiVnC/f9/IYhl2z6TseqvGhQf1OwTrZ5SWJmvXGZ8szq07lRpu6+yuTjFkjLmM2uzgTQnZQbSA05mYQcCpAPQGvwHue+xMOdDCiXoHJ7SV8MYU8HFOblErur33XvgbBqMI5WfmNzDtj6oUeY3Gbyd/0UkajneGtLoc7ImR3WfFQDd5Iiz0+sNX7VgKmMrR17QhX29oOYGaHWqa5xo6i35nOHlUG8gfzWSmDCHOy+zv4iasBr7z5ZYNfgHrxfc9JRXN8OPyEMceHULLmF/XtoS/WZ8+PnSD/ZfOz3i3P7KXNJv6t09qC2f";
    //$hash = hash_hmac('sha256', $iv . base64_encode($ciphertext) , base64_decode($aesKey), false);
    //$hash = hash('sha256', $iv . $ciphertext , true);

    //$encData = new encData();
    //$encData->iv = base64_encode($iv);
    //$encData->iv = $iv;
    //$encData->value = base64_encode($ciphertext);
    //$encData->mac = $hash;
    //$encData->tag = "";
    echo("\n\n");
    echo("Key: $aesKey\n");
    echo("Iv: $iv\n\n");
    //echo("Mac: $encData->mac\n\n");
    $encDataB64 = base64_encode($ciphertext);

    

    return $encDataB64;
}




function decrypt($aesKey, $iv, $data) {

    $method = "AES-256-CBC";

    echo("\n\n");
    echo("Key: $aesKey\n");
    echo("Iv: $iv\n\n");
    //echo("Data: $data\n\n");

    return openssl_decrypt(base64_decode($data), $method, base64_decode($aesKey), OPENSSL_RAW_DATA, base64_decode($iv));
}







$encDataB64 = isset($argv[1]) ? $argv[1] : null;



if ( $encDataB64 ){
    
    //echo $encParams;
    //$iv = $encParams->iv;
    //$data = $encParams->value;
    //$mac = $encParams->mac;

    $decData = decrypt($aesKey, $iv, $encDataB64);

    //echo("Mac: $mac\n");
    echo("Plain: $decData\n\n");


    return 0;

}else{

    // Encrypt test data...

    $data = file_get_contents('./text.json', true);


    $encData = encrypt($data, $aesKey, $iv);
    echo("Encrypted: $encData\n\n");

    return 0;

}




?>
