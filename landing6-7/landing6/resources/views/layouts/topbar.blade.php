
<header id="header">
    <div class="index">

        <div class=" index-flex-top">
            <div class="index-flex">
                <a>
                    <img class="" src=" {{ url('/images/AMBLOGO.png') }}" alt="Image" />
                </a>
            </div>
            <div class=" index-flex" style="">
                <a  href="{{ url('landingsale') }}">

                    <button class="under-line b-style-head"><img class="img-icontop" src="{{ url('/images/user.png') }}" alt="Image" />ชื่อผู้ใช้</button>
                </a>
                <a href="{{ url('landingsale') }}">
                    <button class="under-line b-style-head"><img class="img-icontop" src="{{ url('/images/lock.png') }}" alt="Image" />รหัสผ่าน</button>
                </a>
                <a href="{{ url('register') }}">
                    <button class="under-line b-style-lot">สมัครสมาชิก</button>
                </a>
                <a href="{{ url('landingsale') }}">
                    <button class="under-line b-style-lot">เข้าแทงหวย</button>
                </a>
                <a href="{{ url('contract') }}">
                    <button class="under-line">ติดต่อเรา</button>
                </a>
            </div>
        </div>

        <div class=" index-flex index-flex-undertop" style="">
            <a href="{{ url('landingsale') }}">
                <button class="under-line-undertop">หน้าแรก</button>
            </a>
            <a href="{{ url('register') }}">
                <button class="under-line-undertop">สมัครสมาชิก</button>
            </a>
            <a href="{{ url('landingsale') }}">
                <button class="under-line-undertop">วิธีเช็ครางวัลหวย</button>
            </a>
        </div>

        <div class="index-flex-mobile" style="">
            <nav class="mobile-bottom-nav">
                <div class="mobile-bottom-nav__item mobile-bottom-nav__item--active">
                    <a>
                    <div class="mobile-bottom-nav__item-content">
                        <div class="material-icons"><img class="img-responsive" src="{{ url('/images/home-swith.png') }}" alt="Image" /></div>
                        <div class="textres">
                        หน้าแรก
                        </div>
                    </div>
                </a>
                </div>
                <div class="mobile-bottom-nav__item">
                    <a>
                    <div class="mobile-bottom-nav__item-content">
                        <div class="material-icons"><img class="img-responsive" src="{{ url('/images/home2-swith.png') }}" alt="Image" /></div>
                        <div class="textres">
                        เข้าแทงหวย
                    </div>
                    </div>
                </a>
                </div>
                <div class="mobile-bottom-nav__item">
                    <a>
                    <div class="mobile-bottom-nav__item-content">
                        <div class="material-icons"><img class="img-responsive" src="{{ url('/images/home3-swith.png') }}" alt="Image" /></div>
                        <div class="textres">
                        วิธีเช็คหวย
                    </div>
                    </div>
                </a>
                </div>

                <div class="mobile-bottom-nav__item">
                    <a>
                    <div class="mobile-bottom-nav__item-content">
                        <div class="material-icons"><img class="img-responsive" src="{{ url('/images/home4-swith.png') }}" alt="Image" /></div>
                        <div class="textres">
                        บัญชี
                    </div>
                    </div>
                </a>
                </div>
            </nav>
        </div>


    </div>



</html>







{{-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>


    AOS.init({
        duration: 1200,
    });

    // $('a').click(function() {
    //     Swal.fire({
    //         icon: 'error',
    //         title: 'สำหรับเข้าชมเท่านั้น',
    //         // footer: '<a href="">Why do I have this issue?</a>'
    //     })
    //     // .then(function() {
    //     //     setTimeout(function() {
    //     //         window.location.href = "http://127.0.0.1:8000/landing2"
    //     //     }, 1000);
    //     // });
    // });
    window.onscroll = function() {
        myFunction()
    };

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
</script> --}}
