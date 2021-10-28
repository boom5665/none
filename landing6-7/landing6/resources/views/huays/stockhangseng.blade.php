@extends('layouts.app')

@section('content')

    <div class="index">
        <div class="register">
            <div class="container">
                <div class="row row-mar ">
                    <div class="col-12 col-md-9">
                        <div class="h-100 AMB-background AMB-reward AMB-content">
                            <img style="width: 100%;"  src=" {{ url('/images/banner-stockhangseng.png') }}">
                            <h1 class="AMB-contact-title-gradient">หวยหุ้นฮั่งเส็ง</h1>
                            <h2 class="AMB-contact-title">หวยหุ้นฮั่งเส็ง กติกาการเเทง AMBLOTTO</h2>
                            <ul>
                            <li>เปิดรับเเทงออนไลน์ทุกวัน จันทร์ – ศุกร์ (ปิดรับเเทงตามวันหยุดของตลาดหุ้น)</li>
                            <li>เปิดรับเเทงตั้งเเต่ 05.00 น. (ตามเวลาประเทศไทย)</li>
                            <li>ปิดรับเเทง 2 รอบ รอบเช้า 10:55 น. และรอบบ่าย 14:55 น.</li>
                            <li>ระบบทำการคืนโพยเเละเครดิตให้ในกรณีที่ตลาดหุ้นไม่มีความเคลื่อนไหวใดๆ ภายใน 1 ชั่วโมง ถือว่าไม่มีการออกผลรางวัล</li>
                            </ul>
                            <h2 class="AMB-contact-title">วิธีการดูผลหวยหุ้นฮั่งเส็ง</h2>
                            <ul>
                            <li>ใช้ผลปิดตลาดของหุ้น SZSE COMPONENT INDEX</li>
                            <li>ออกผลรางวัล จะนำเลขหลักหน่วยเเละจุดทศนิยมของค่า Last ออกรางวัล 3 ตัวบน เเละนำจุดทศนิยมของค่า Change ออกรางวัล 2 ตัวล่าง	</li>
                            </ul>
                        </div>
                    </div>


                    <div class="mt-2 d-block d-md-none"></div>
                    @include('layouts.right-menu')
                </div>
            </div>
        </div>
    </div>
@endsection
