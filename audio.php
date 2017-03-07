<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"> </script>
 <script>
        $(document).ready(function () {
            $("#start").on('click', function (e) {
                debugger;
                var u1 = new SpeechSynthesisUtterance(' Welcome  <?php echo $username; ?> to the library of HERITAGE INSTITUTE OF TECHNOLOGY');
                u1.lang = 'en-US';
                u1.pitch = 1;
                u1.rate = 1;
                //u1.voice = voices[10];
                u1.voiceURI = 'native';
                u1.volume = 1;
                speechSynthesis.speak(u1);

            });
        });
    </script>