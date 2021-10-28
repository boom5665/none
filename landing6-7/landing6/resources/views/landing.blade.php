<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AMB- LOTTO</title>
    <link data-n-head="ssr" rel="icon" type="image/x-icon" href="http://127.0.0.1:8000/images/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400&display=swap" rel="stylesheet">

    {{-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
</head>




<div class="index">
    <div class="">
        <div class=" index-flex-top">
            <div class="index-flex">
                <a>
                    <img class="" src=" {{ url('/images/AMBLOGO.png') }}" alt="Image" />
                </a>
            </div>
            <div class=" index-flex" style="">
                <a>

                    <button class="under-line b-style-head"><img class="img-icontop" src="{{ url('/images/user.png') }}" alt="Image" />ชื่อผู้ใช้</button>
                </a>
                <a>

                    <button class="under-line b-style-head"><img class="img-icontop" src="{{ url('/images/lock.png') }}" alt="Image" />รหัสผ่าน</button>
                </a>
                <a>
                    <button class="under-line b-style-lot">สมัครสมาชิก</button>
                </a>
                <a>
                    <button class="under-line b-style-lot">เข้าแทงหวย</button>
                </a>
                <a>
                    <button class="under-line">ติดต่อเรา</button>
                </a>
            </div>
        </div>

        <div class=" index-flex index-flex-undertop" style="">
            <a>
                <button class="under-line-undertop">หน้าแรก</button>
            </a>
            <a>
                <button class="under-line-undertop">สมัครสมาชิก</button>
            </a>
            <a>
                <button class="under-line-undertop">วิธีเช็ครางวัลหวย</button>
            </a>
        </div>

        <div class="index-flex-mobile" style="">
            <nav class="mobile-bottom-nav">
                <div class="mobile-bottom-nav__item mobile-bottom-nav__item--active">
                    <div class="mobile-bottom-nav__item-content">
                        <a>
                        <div class="material-icons"><img class="img-responsive" src="{{ url('/images/home-swith.png') }}" alt="Image" /></div>
                        <div class="textres">
                        หน้าแรก
                        </div>
                    </a>
                    </div>
                </div>
                <div class="mobile-bottom-nav__item">
                    <div class="mobile-bottom-nav__item-content">
                        <a>
                        <div class="material-icons"><img class="img-responsive" src="{{ url('/images/home2-swith.png') }}" alt="Image" /></div>
                        <div class="textres">
                        เข้าแทงหวย
                    </a>
                    </div>
                    </div>
                </div>
                <div class="mobile-bottom-nav__item">
                    <div class="mobile-bottom-nav__item-content">
                        <a>
                        <div class="material-icons"><img class="img-responsive" src="{{ url('/images/home3-swith.png') }}" alt="Image" /></div>
                        <div class="textres">
                        วิธีเช็คหวย
                    </a>
                    </div>
                    </div>
                </div>

                <div class="mobile-bottom-nav__item">
                    <div class="mobile-bottom-nav__item-content">
                        <a>
                        <div class="material-icons"><img class="img-responsive" src="{{ url('/images/home4-swith.png') }}" alt="Image" /></div>
                        <div class="textres">
                        บัญชี
                    </a>
                    </div>
                    </div>
                </div>
            </nav>
        </div>


    </div>


    <div class="container">
        <div class="top-img">
            <div class="" style=" display: flex; ">
                <div class="boximage-girl col-12 col-xl-12">
                    <img class="image-girl image-girl-zindex" src="{{ url('/images/ban2.png') }}" alt="Image" />
                </div>
            </div>
            <div class="col-xl-12 bg-img-ban3">

                <div>
                    <div class="fonthead display: flex;">
                        <div style="">
                            <div class="font-text"><b>แทงหวยออนไลน์</b></div>
                        </div>
                        <div class="" style=" color:#000">อันดับ 1 ของไทย</div>
                    </div>
                    <div class="dis-cen">
                        <div class="col-3">
                            <div class=" dis-col">
                                <img data-aos="flip-right" class=" a1" src="{{ url('/images/a1.png') }}"
                                    alt="Image" />

                            </div>
                            <div class="font-a">
                                <div class="font-a-con">หวยยี่กี หวยยี่กี</div>
                            </div>

                        </div>
                        <div class="col-3">
                            <div class=" dis-col">
                                <img data-aos="flip-right" class=" a1" src="{{ url('/images/a2.png') }}"
                                    alt="Image" />
                            </div>
                            <div class="font-a">
                                <div class="font-a-con">หวยลาว</div>

                            </div>
                        </div>
                        <div class="col-3">
                            <div class=" dis-col">
                                <img data-aos="flip-right" class=" a1" src="{{ url('/images/a3.png') }}"
                                    alt="Image" />

                            </div>
                            <div class="font-a">
                                <div class="font-a-con">หวยรัฐบาล</div>

                            </div>
                        </div>
                        <div class="col-3">
                            <div class=" dis-col">
                                <img data-aos="flip-right" class=" a1" src="{{ url('/images/a4.png') }}"
                                    alt="Image" />

                            </div>
                            <div class="font-a">
                                <div class="font-a-con">หวยหุ้น </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-12 bg-img-ban4">
                <div class="box-tex2">
                    <div class="box-tex-con">ฝาก - ถอน 24 ชม. </div>
                    <div class="box-tex-in">
                        ผ่านธนาคารชั้นนำของไทย โอนไว จ่ายเต็ม มั่นใจ 100%
                    </div>
                    <div class="">
                        <img class=" tana" src="http://127.0.0.1:8000/images/tana1.png" alt="Image">
                        <img class="tana" src="http://127.0.0.1:8000/images/tana2.png" alt="Image">
                        <img class="tana" src="http://127.0.0.1:8000/images/tana3.png" alt="Image">
                        <img class="tana" src="http://127.0.0.1:8000/images/tana4.png" alt="Image">
                        <img class="tana" src="http://127.0.0.1:8000/images/tana5.png" alt="Image">
                    </div>
                </div>


            </div>
            <div class="col-xl-12 bg-img-ban5">

                <div class="box-tex2">
                    <div class="fonthead display: flex;">
                        <div style="">
                            <div class="font-text"><b>เว็บแทงหวยที่มั่นคงที่สุด</b></div>
                        </div>
                        <div class="font-text-style">ด้วยประสบการณ์การให้บริการทั้งคาสิโนออนไลน์ และ แทงหวยออนไลน์
                            นานนับ 10 ปี
                            และไม่หยุด
                            พัฒนาเพื่อประสบการณ์ต่อผู้เล่น ที่สะดวก เสถียรที่สุด รองรับทั้งมือถือ และ คอมพิวเตอร์ โดยไม่
                            ต้องดาวน์โหลดใดๆ อีกทั้งยังมีระบบฝากถอนรวดเร็ว ทำให้เว็บที่ทีมงานดูแลและพัฒนาเป็นที่นิยม
                            แพร่หลายจนถึงทุกวันนี้ ซึ่งผู้เล่นอยากจะแทง หวยยี่กี ที่มีให้ลุ้นรวยทั้งวัน
                            รวมทั้งหวยหุ้นทั้งในและ
                            ต่างประเทศ หวยลาว และหวยอื่นๆ อีกมากมายต้องนึกถึง เราเป็นเว็บแรกแน่นอน
                            โปรโมชั่นพิเศษ
                            สำหรับสมาชิกใหม่ และสิทธิพิเศษมากมาย แจกเครดิตฟรีอย่างต่อเนื่อง</div>
                    </div>

                </div>
                <div class="box-tex2 box-textgirl">
                    <div class="fonthead">
                        <div style="">
                            <div class="font-text"><b>โปรโมชั่นสำหรับสมาชิก</b></div>
                        </div>
                        <div class="col-xl-12  d-flex">
                            <div class="col-xl-6">
                                <div class="col-12 " style="display: flex;">
                                    <div class="col-6">
                                        <button class=" under-line-lot">
                                            <div class="discolum">
                                                <img class="img-icon" src="{{ url('/images/lot-1.png') }}"
                                                    alt="Image">
                                                <div class="discolum-font">
                                                    แจก
                                                    <div>รางวัลใหญ่</div>
                                                </div>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button class="under-line-lot">
                                            <div class="discolum">
                                                <img class="img-icon" src="{{ url('/images/lot-2.png') }}"
                                                    alt="Image">
                                                <div class="discolum-font">
                                                    สมาชิก
                                                    <div>ใหม่รับโบนัส</div>
                                                </div>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-12 " style="display: flex;">
                                    <div class="col-6">
                                        <button class="under-line-lot">
                                            <div class="discolum">
                                                <img class="img-icon" src="{{ url('/images/lot-3.png') }}"
                                                    alt="Image">
                                                <div class="discolum-font">
                                                    เติมเงิน
                                                    <div>ครั้งแรก</div>
                                                </div>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button class="under-line-lot">
                                            <div class="discolum">
                                                <img class="img-icon" src="{{ url('/images/lot-4.png') }}"
                                                    alt="Image">
                                                <div class="discolum-font">
                                                    ยิ่งแทง
                                                    <div>ยิ่งได้</div>
                                                </div>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <img class="image-girl" src="{{ url('/images/girl.png') }}" alt="Image" />
                            </div>
                        </div>
                    </div>

                </div>

            </div>


            <div class=" " style="">
                <div class="fonthead  ">
                    <div>
                        <div class="font-text" style=" margin-top: 30px;">
                            <div class="font-text">หวยออนไลน์ที่เปิดให้บริการ</div>
                        </div>
                    </div>
                    <div class="">
                        <div class=" carousel-inner">
                            <div class=" font-un-crow font-un row">
                                <div class="col-3 col-lg-3 pe-0">
                                    <a>
                                        <div class="bg-border">
                                            <img class="bg-img" src="{{ url('/images/thai.png') }}" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 col-lg-3 pe-0">
                                    <a>
                                        <div class="bg-border">
                                            <img class="bg-img" src="{{ url('/images/tks.png') }}" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 col-lg-3 pe-0">
                                    <a>
                                        <div class="bg-border">
                                            <img class="bg-img" src="{{ url('/images/aomsin.png') }}"
                                                alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 col-lg-3 pe-0">
                                    <a>
                                        <div class="bg-border">
                                            <img class="bg-img" src="{{ url('/images/hanoy.png') }}" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 col-lg-3 pe-0">
                                    <a>
                                        <div class="bg-border">
                                            <img class="bg-img" src="{{ url('/images/maley.png') }}" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 col-lg-3 pe-0">
                                    <a>
                                        <div class="bg-border">
                                            <img class="bg-img" src="{{ url('/images/yekee.png') }}" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 col-lg-3 pe-0">
                                    <a>
                                        <div class="bg-border">
                                            <img class="bg-img" src="{{ url('/images/laos.png') }}" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 col-lg-3 pe-0">
                                    <a>
                                        <div class="bg-border">
                                            <img class="bg-img" src="{{ url('/images/pingpong.png') }}"
                                                alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div id="textarea" style="display: none" class=" font-un-crow font-un row">
                                <div class="col-3 col-lg-3 pe-0">
                                    <a></a>
                                    <div class="bg-border">
                                        <img class="bg-img" src="{{ url('/images/sing.png') }}" alt="">
                                    </div>
                                    </a>
                                </div>
                                <div class="col-3 col-lg-3 pe-0">
                                    <a>
                                        <div class="bg-border">
                                            <img class="bg-img" src="{{ url('/images/stockhangseng.png') }}"
                                                alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 col-lg-3 pe-0">
                                    <a>
                                        <div class="bg-border">
                                            <img class="bg-img" src="{{ url('/images/stockkorea.png') }}"
                                                alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 col-lg-3 pe-0">
                                    <a>
                                        <div class="bg-border">
                                            <img class="bg-img" src="{{ url('/images/stockgerman.png') }}"
                                                alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 col-lg-3 pe-0">
                                    <a>
                                        <div class="bg-border">
                                            <img class="bg-img" src="{{ url('/images/stockeng.png') }}"
                                                alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 col-lg-3 pe-0">
                                    <a>
                                        <div class="bg-border">
                                            <img class="bg-img" src="{{ url('/images/stockchina.png') }}"
                                                alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 col-lg-3 pe-0">
                                    <a>
                                        <div class="bg-border">
                                            <img class="bg-img"
                                                src="{{ url('/images/stockdownjones.png') }}" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 col-lg-3 pe-0">
                                    <a>
                                        <div class="bg-border">
                                            <img class="bg-img" src="{{ url('/images/stockindia.png') }}"
                                                alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 col-lg-3 pe-0">
                                    <a>
                                        <div class="bg-border">
                                            <img class="bg-img" src="{{ url('/images/stockrussia.png') }}"
                                                alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 col-lg-3 pe-0">
                                    <a>
                                        <div class="bg-border">
                                            <img class="bg-img" src="{{ url('/images/stockegypt.png') }}"
                                                alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 col-lg-3  pe-0">
                                    <a>
                                        <div class="bg-border">
                                            <img class="bg-img" src="{{ url('/images/stockthai.png') }}"
                                                alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 col-lg-3 pe-0">
                                    <a>
                                        <div class="bg-border">
                                            <img class="bg-img" src="{{ url('/images/stocknikkei.png') }}"
                                                alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3 col-lg-3 pe-0">
                                    <a>
                                        <div class="bg-border">
                                            <img class="bg-img" src="{{ url('/images/stocktaiwan.png') }}"
                                                alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="group-style-lot">
                                <button class=" b-style-lot" id="seeMore" onclick="toggleSeeMore()"
                                    href="javascript:void(0);">ดูเพิ่มเติม</button>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


</div>
</div>

<footer>
    <div class="">
        สมัครสมาชิก | เข้าแทงหวย | ตรวจเช็ครางวัลหวย | โปรโมชั่น | ติดต่อเรา
        <div class="">Copyright © 2020 AMB-lotto.com All right reserved.
        </div>
    </div>
    {{-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        // AOS.init({
        //     duration: 1200,
        // });
        $('a').click(function() {
            Swal.fire({
                icon: 'error',
                title: 'สำหรับเข้าชมเท่านั้น',
                // footer: '<a href="">Why do I have this issue?</a>'
            })
            // .then(function() {
            //     setTimeout(function() {
            //         window.location.href = "http://127.0.0.1:8000/landing2"
            //     }, 1000);
            // });
        });

        function toggleSeeMore() {
            if (document.getElementById("textarea").style.display == 'none') {
                document.getElementById("textarea").style.display = 'flex';
                document.getElementById("seeMore").innerHTML = 'ดูน้อยลง';
            } else {
                document.getElementById("textarea").style.display = 'none';
                document.getElementById("seeMore").innerHTML = 'ดูเพิ่มเติม';
            }
        }

        var navItems = document.querySelectorAll(".mobile-bottom-nav__item");
        navItems.forEach(function(e, i) {
            e.addEventListener("click", function(e) {
                navItems.forEach(function(e2, i2) {
                    e2.classList.remove("mobile-bottom-nav__item--active");
                })
                this.classList.add("mobile-bottom-nav__item--active");
            });
        });

    </script>
</footer>
