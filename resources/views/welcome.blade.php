<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://kit.fontawesome.com/de84253868.js" crossorigin="anonymous"></script>

    <!-- Fonts -->

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased font-primary">
    <div class="bg-home px-8 w-full">
        <div class="
                    py-12
                    flex flex-col
                    justify-between
                    min-h-screen
                    md:max-w-2xl
                    lg:max-w-3xl
                    mx-auto
                ">
            <div>
                <!-- Countdown timer -->
                <div class="flex flex-wrap justify-center gap-4" x-data="timer()" x-init="countdown()">
                    <div class="timer-circle">
                        <div>
                            <span class="timer-count" x-text="days"></span>
                            <span class="timer-type">दिन</span>
                        </div>
                    </div>
                    <div class="timer-circle">
                        <div>
                            <span class="timer-count" x-text="hours"></span>
                            <span class="timer-type">घण्टा</span>
                        </div>
                    </div>
                    <div class="timer-circle">
                        <div>
                            <span class="timer-count" x-text="minutes"></span>
                            <span class="timer-type">मिनेट</span>
                        </div>
                    </div>
                    <div class="timer-circle">
                        <div>
                            <span class="timer-count" x-text="seconds"></span>
                            <span class="timer-type">सेकेण्ड</span>
                        </div>
                    </div>
                </div>
                <!-- Countdown timer ends -->
                <div class="mt-12 text-white text-center">
                    <div class="flex justify-center my-4">
                        <img src="{{ asset('img/SSK_logo_500.png') }}" alt="" class="h-64">
                    </div>
                    <h1 class="font-normal text-5xl md:text-8xl" style="line-height: 1.5;">
                        हामी <span class="font-bold">चाडैँ <br> अनलाइन</span> हुँदैछाैँ
                    </h1>
                    <p class="pt-4 text-xl md:text-2xl" style="line-height: 1.5;">
                        <strong><em>शेर्पा सेवा केन्द्र </em></strong> आफ्ना महत्त्वपूर्ण सेवाहरुलाई अनलाइनबाटै उपलब्ध
                        गराउने हेतुले वेबसाइट
                        निर्माण कार्य गरिरहेको जानकारी गराउँदछ । हामी चाडैँ आउँदैछौँ । कृपया, प्रतीक्षा गर्नुहोस् ।
                    </p>
                </div>
                <form action="" class="mt-8 md:flex md:max-w-lg md:mx-auto">
                    <div class="relative">
                        <input id="email" type="email" placeholder="Email address" class="
                                    peer
                                    px-8
                                    pt-5
                                    pb-3
                                    w-full
                                    placeholder-transparent
                                    rounded-full
                                    flex-grow
                                    md:rounded-r-none
                                " />
                        <label for="email" class="
                                    absolute
                                    text-gray-700
                                    left-8
                                    top-2
                                    font-bold
                                    text-xs
                                    peer-placeholder-shown:top-4
                                    peer-placeholder-shown:font-normal
                                    peer-placeholder-shown:text-base
                                    peer-focus:top-2
                                    peer-focus:font-bold
                                    peer-focus:text-xs
                                    cursor-text
                                    transition-all
                                ">Email
                            address</label>
                    </div>
                    <button type="submit" class="
                                mt-4
                                bg-pink-800
                                text-white
                                uppercase
                                font-bold
                                text-sm text-center
                                w-full
                                px-8
                                h-14
                                rounded-full
                                md:mt-0 md:rounded-l-none md:w-48
                            ">
                        Sign up
                    </button>
                </form>
            </div>
            <footer class="mt-8">
                <img src="images/logo.svg" class="h-10 opacity-80 mx-auto" alt="" />
                <div class="
                            mt-4
                            mx-auto
                            text-pink-800 text-lg
                            space-x-2
                            text-center
                        ">
                    <a href="#" class="social-link">
                        <i class="fab fa-facebook-f m-auto"></i>
                    </a>
                    <a href="#" class="social-link">
                        <i class="fab fa-twitter m-auto"></i>
                    </a>
                    <a href="#" class="social-link">
                        <i class="fab fa-pinterest-p m-auto"></i>
                    </a>
                    <a href="#" class="social-link">
                        <i class="fab fa-instagram m-auto"></i>
                    </a>
                    <a href="#" class="social-link">
                        <i class="fab fa-linkedin-in m-auto"></i>
                    </a>
                </div>
            </footer>
        </div>
    </div>
    <script>
        function timer() {
            return {
                days: "00",
                hours: "00",
                minutes: "00",
                seconds: "00",
                endTime: new Date(
                    "October 4, 2022 23:59:59 GMT+0530"
                ).getTime(),
                now: new Date().getTime(),
                timeLeft: 0,
                countdown: function() {
                    let counter = setInterval(() => {
                        this.now = new Date().getTime();
                        this.timeLeft = (this.endTime - this.now) / 1000;
                        this.seconds = this.format(this.timeLeft % 60);
                        this.minutes = this.format(this.timeLeft / 60) % 60;
                        this.hours =
                            this.format(this.timeLeft / (60 * 60)) % 24;
                        this.days = this.format(
                            this.timeLeft / (60 * 60 * 24)
                        );
                        if (this.timeLeft <= 0) {
                            clearInterval(counter);
                            this.seconds = "00";
                            this.minutes = "00";
                            this.hours = "00";
                            this.days = "00";
                        }
                    }, 1000);
                },
                format: function(value) {
                    if (value < 10) {
                        return "0" + Math.floor(value);
                    } else return Math.floor(value);
                },
            };
        }
    </script>
</body>

</html>
