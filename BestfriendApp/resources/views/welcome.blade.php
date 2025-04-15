<x-guest-layout>

<br>
  <center><h1 class="display-5 fw-bold lh-1 mb-3" style="color: #ff66c4;">สวัสดีเพื่อนรัก!!</h1></center>
  <br>
<div class="container">
  <div class="row align-items-md-stretch">


  <div class="col-md-6">
        <table class="table text-center">
            <thead class="table">
                <tr class="table-warning">
                    <th>#</th>
                    <th>คำถาม</th>
                    <th>วันที่เขียน</th>
                    <th>แก้ไขล่าสุด</th>
                    <th>ดู</th>
                </tr>
            </thead>
            <tbody>
                @forelse($advices as $index => $advice)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $advice->title }}</td>
                        <td>{{ $advice->created_at->format('d/m/Y') }}</td>
                        <td>{{ $advice->updated_at->format('d/m/Y') }}</td>
                        <td>
                            <a href="{{ route('welcome.show', $advice->id) }}" class="btn btn-success btn-sm" style="color: white;">เรียกดู</a>
                        </td>
                        
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">No Mydays Found</td>
                    </tr>
                @endforelse
                
            </tbody>
        </table>
    </div>
      <!-- แสดงลิงก์แบ่งหน้า -->
      {{ $advices->links() }}
  
      <div class="col-md-6">
        <!-- 1 -->
            <div class="card text-center">
              <div class="card-header">
                <p style="font-size: 28px; font-weight: bold;">เครียดกับปัญหาชีวิต</p>
                โทรปรึกษาใตนได้บ้าง!!
              </div>
              <div class="card-body">
                <h5 class="card-title"><b>สายด่วนสุขภาพจิต กรมสุขภาพจิต</b></h5>
                <p class="card-text">1323 | ตลอด 24 ชม.</p>
              </div>

              <div class="card-body">
                <h5 class="card-title"><b>epress We Care โรงพยาบาลตำรวจ</b></h5>
                <p class="card-text">081-932-0000 | 8.00 - 16.00 น.</p>
              </div>

              <div class="card-body">
                <h5 class="card-title"><b>สายด่วนสุขภาพจิต โรงพยาบาลราชวิถี</b></h5>
                <p class="card-text">02-354-8152 | 8.00 - 16.00 น.</p>
              </div>

              <div class="card-body">
                <h5 class="card-title"><b>สมาคมสะมาริตันส์แห่งประเทศไทย</b></h5>
                <p class="card-text">02-713-6793 | 12.00 - 22.00 น.</p>
              </div>

              <div class="card-body">
                <h5 class="card-title"><b>Relationflip</b></h5>
                <p class="card-text">099-002-6888 | 08.00 - 18.00 น.</p><br>
                <p class="card-text">ต้องจองล่วงหน้ามีค่าบริการ 1,000 บาท/ครั้ง</p>
              </div>

              <div class="card-body">
                <h5 class="card-title"><b>บริการสายด่วนชาวพุทธ</b></h5>
                <p class="card-text">091-550-9893 | ตลอด 24 ชม.</p>             </div>

            </div>

            

      </div>

  <div class="pt-3 mt-4 text-muted border-top"></div>
    
  </div>
</div>

</x-guest-layout>