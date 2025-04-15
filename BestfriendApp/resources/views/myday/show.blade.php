<x-app-layout>
    <br>
    <center><h1 class="display-5 fw-bold lh-1 mb-3" style="color: #ff66c4;">บันทึกของฉัน</h1></center>

    <div class="container">
        <!-- แบบฟอร์ม -->
        <div class="mb-3">
            <label class="form-label">ชื่อผู้เขียน</label>
            <input type="text" class="form-control" value="{{ Auth::user()->name }}" readonly>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">วันที่เขียน</span>
            <input type="text" class="form-control" value="{{ $myday->created_at->format('d/m/Y') }}" readonly>
            <span class="input-group-text">แก้ไขล่าสุด</span>
            <input type="text" class="form-control" value="{{ $myday->created_at->format('d/m/Y') }}" readonly>
        </div>
        <div class="mb-3">
            <label class="form-label">ชื่อเรื่อง</label>
            <input type="text" class="form-control" value="{{ $myday->title }}" readonly>
        </div>
        <div class="mb-3">
            <label class="form-label">เล่าเรื่อง</label>
            <textarea class="form-control" rows="3" readonly>{{ $myday->detail }}</textarea>
        </div>
        <button onclick="history.back()" class="btn btn-danger btn-sm">ย้อนกลับ</button>
    </div>

</x-app-layout>