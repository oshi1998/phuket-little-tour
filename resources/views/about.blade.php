@extends('app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="text-center mb-4">
                <h2 class="fw-bold">เกี่ยวกับเรา</h2>
            </div>
            <div class="row g-4 align-items-start">
                <div class="col-md-7">
                    <div class="bg-light p-4 rounded shadow-sm h-100">
                        <p>
                            <strong>Phuket Little Tour</strong> เราคือผู้ให้บริการรถตู้ท่องเที่ยวในจังหวัดภูเก็ต ที่มุ่งเน้นการบริการด้วยใจ ความปลอดภัย และความสะดวกสบายของลูกค้าเป็นสำคัญ ไม่ว่าคุณจะมาเที่ยวแบบครอบครัว คู่รัก หรือหมู่คณะ เราพร้อมดูแลคุณตลอดการเดินทาง
                        </p>
                        <p>
                            ด้วยประสบการณ์ในวงการท่องเที่ยวท้องถิ่น เรารู้จักทุกมุมของภูเก็ต ทั้งสถานที่ยอดนิยม และโลเคชั่นลับที่นักท่องเที่ยวไม่ควรพลาด ทีมงานคนขับของเราทุกคนเป็นมืออาชีพ ขับขี่ปลอดภัย สุภาพ และตรงต่อเวลา พร้อมแนะนำเส้นทางหรือสถานที่ท่องเที่ยวตามความต้องการของคุณ
                        </p>
                        <h5 class="mt-4">บริการของเรา:</h5>
                        <ul>
                            <li>รถตู้ปรับอากาศ VIP พร้อมคนขับ</li>
                            <li>รับ-ส่งสนามบิน</li>
                            <li>ทัวร์รอบเกาะภูเก็ต / เขาหลัก / พังงา / กระบี่</li>
                            <li>บริการรายวัน หรือแบบเหมาเป็นชั่วโมง</li>
                            <li>แพ็กเกจเที่ยวแบบส่วนตัว</li>
                        </ul>
                        <p>
                            <strong>Phuket Little Tour</strong> อยากให้ทุกการเดินทางของคุณในภูเก็ตเป็นเรื่องง่าย สนุก และน่าประทับใจ เพราะเรารู้ว่าทริปดีๆ เริ่มต้นจากการเดินทางที่ดี
                        </p>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="d-flex flex-column gap-3">
                        <img src="{{ asset('img/welcome.jpg') }}" alt="Welcome to Phuket Little Tour" class="img-fluid rounded shadow-sm">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection