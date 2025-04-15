<x-app-layout>
    <br>
    <center><h1 class="display-5 fw-bold lh-1 mb-3" style="color: #ff66c4;">บันทึกของฉัน</h1></center>
    <br>
    <div class="container">
        <!-- แบบฟอร์ม -->
        <div class="d-flex justify-content-center">
            
        

            <div class="col-md-6">
                <form action="@if (isset($edit->id)) {{ route('myday.update', ['id' => $edit->id]) }}@else{{ route('upload') }} @endif" method="POST"  enctype="multipart/form-data">
                    @csrf  <!-- ป้องกัน CSRF Attack -->
                    
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">คนเขียน</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" name="user_id" id="user_id" aria-describedby="inputGroup-sizing-default" value="{{ Auth::user()->id }}" disabled>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text" >ตั้งชื่อเรื่อง</span>
                        <input type="text" aria-label="First name" class="form-control" name="title" id="title" value="@if (isset($edit->id)) {{ $edit->title }}@else {{ old('title') }} @endif">
                    </div>
                    <div class="mb-3">
                        <label for="detail" class="form-label">ไหนเล่ามา</label>
                        <textarea class="form-control" id="detail" name="detail" rows="3" value="@if (isset($edit->id)) {{ $edit->detail }}@else {{ old('detail') }} @endif"></textarea>
                    </div>
                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-warning btn-sm">บันทึกตรงนี้</button>
                    <a href="{{ route('myday', ['userId' => Auth::id()]) }}" class="btn btn-danger btn-sm" style="color: white"; >ยกเลิก</a>
                </form>
            </div>

        </div> 
        
    </div>
    <div class="pt-3 mt-4 text-muted border-top"></div>

</x-app-layout>