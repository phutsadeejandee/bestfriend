<x-app-layout>

    <br>
  <center><h1 class="display-5 fw-bold lh-1 mb-3" style="color: #ff66c4;">บันทึกของฉัน</h1></center>
  <br>
    <div class="container">
        <!-- แบบฟอร์ม -->
        <div class="row align-items-md-stretch">

            <div class="col-md-6">
                <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf  <!-- ป้องกัน CSRF Attack -->
                    
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">คนเขียน</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" name="user_id" id="user_id" aria-describedby="inputGroup-sizing-default" value="{{ Auth::user()->id }}" disabled>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text" >ตั้งชื่อเรื่อง</span>
                        <input type="text" aria-label="First name" class="form-control" name="title" id="title"  required>
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="detail" class="form-label">ไหนเล่ามา</label>
                        <textarea class="form-control" id="detail" name="detail" rows="3" required></textarea>
                    </div>
                    @error('detail')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-warning btn-sm">บันทึกตรงนี้</button>
                    <button onclick="history.back()" class="btn btn-danger btn-sm">ย้อนกลับ</button>
                </form>
            </div>

         
        
    
  <br>

  <!-- <div class="pt-3 mt-4 text-muted border-top"></div> -->

  <!-- แสดง -->
   
            <div class="col-md-6">
                <table class="table text-center">
                    <thead class="table">
                        <tr class="table-warning">
                            <th>#</th>
                            <th>เรื่องอะไร</th>
                            <th>วันที่เขียน</th>
                            <th>แก้ไขล่าสุด</th>
                            <th>ดู</th>
                            <th>แก้ไข</th>
                            <th>ลบออก</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($mydays as $index => $myday)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $myday->title }}</td>
                                <td>{{ $myday->created_at->format('d/m/Y') }}</td>
                                <td>{{ $myday->updated_at->format('d/m/Y') }}</td>
                                <td>
                                    <a href="{{ route('myday.show', $myday->id) }}" class="btn btn-success btn-sm" style="color: white;">เรียกดู</a>
                                </td>
                                <td>
                                    <a href="{{ route('myday.edit', ['id' => $myday->id]) }}" class="btn btn-warning btn-sm" style="color: white;">แก้ไข</a>
                                </td>
                                <td>
                                    <!-- ปุ่ม Delete -->
                                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $myday->id }})">ลบออก</button>

                                    <!-- ฟอร์มลบซ่อนไว้ -->
                                    <form id="delete-form-{{ $myday->id }}" action="{{ route('myday.destroy', $myday->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
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
            <!-- จบ แสดง -->
        </div>
    </div>
    <br>
    
    <style>
        .avatar-upload {
        position: relative;
        max-width: 205px;
        }
        .showImg {
            width: 51%;
            height: 54%;
            margin: auto;
        }
        .showImg>div {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'คุณแน่ใจหรือไม่?',
                text: "หากลบแล้วจะไม่สามารถกู้คืนได้!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'ใช่, ลบเลย!',
                cancelButtonText: 'ยกเลิก'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            });
        }
    </script>

    <div class="pt-3 mt-4 text-muted border-top"></div>
</x-app-layout>
