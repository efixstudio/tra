<?php
if( isset( $content[ 'end_date'] ) && ! empty( $content[ 'end_date'] ) ):

?>
<section class="module module--countdown-timer">
    <div class="container">
        <div class="c--timer-container">
            <div class="c--timer">
                <span class="c--label"><?php echo $content['label_timer']; ?></span>
                <ul class="countdown" data-time="<?php echo $content['end_date'] ; ?>">
                    <li><span id="days" class="timer-section"></span><span>Zile</span></li>
                    <li><span>:</span></li>
                    <li><span id="hours" class="timer-section"></span><span>Ore</span></li>
                    <li><span>:</span></li>
                    <li><span id="minutes" class="timer-section"></span><span>Minute</span></li>
                </ul>
            </div>
            <div class="c--seats">
                <?php if( isset( $content[ 'seats'] ) && ! empty( $content[ 'seats'] ) ): ?>
                    <span class="c--label"><?php echo $content['label_seats']; ?></span>
                    <ul class="seats">
                        <li><?php echo $content['seats']; ?></li>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<script>
    (function () {
        const second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24;


        const countdownSelector = document.querySelector('.countdown');
        if( countdownSelector ){
            const targetDate = countdownSelector.getAttribute('data-time');

            if( ! targetDate ) return;
            const countDown = new Date(targetDate).getTime();
            const     x = setInterval(function() {

                    const   now = new Date().getTime(),
                            distance = countDown - now;

                    document.getElementById("days").innerText = Math.floor(distance / (day)) >= 0 ? String(Math.floor(distance / (day))).padStart(2, '0') : '00';
                    document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)) >= 0 ? String(Math.floor((distance % (day)) / (hour))).padStart(2, '0') : '00';
                    document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)) >= 0 ? String(Math.floor((distance % (hour)) / (minute))).padStart(2, '0'): '00';
                    console.log( distance );
                    //do something later when date is reached
                    <?php if( isset( $content[ 'redirect_to'] ) && ! empty( $content[ 'redirect_to'] ) ): ?>
                    if (distance < 1000) {
                        window.location.href= "<?php echo $content[ 'redirect_to']; ?>";
                        clearInterval(x);
                    }
                    <?php endif;?>
                    //seconds
                }, 0);
        }

    }());

</script>

<?php endif;?>
