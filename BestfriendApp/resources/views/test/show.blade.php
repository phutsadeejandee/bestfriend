<x-app-layout>
    <br>
    <center><h1 class="display-5 fw-bold lh-1 mb-3" style="color: #ff66c4;">ผลการทำแบบทดสอบ</h1></center>

    <div class="container">
        <!-- แบบฟอร์ม -->
        <div class="mb-3">
            <label class="form-label">ชื่อผู้ทำแบบประเมิน</label>
            <input type="text" class="form-control" value="{{ Auth::user()->name }}" readonly>
        </div>
        <div class="mb-3">
            <label class="form-label">ประเภทบุคลิกภาพ (Personality Type)</label>
            <input type="text" class="form-control" value="{{ $test->personality_type }}" readonly>
        </div>
        <div class="mb-3">
            <label class="form-label">อธิบาย ประเภทบุคลิกภาพ</label>
            <textarea class="form-control" rows="3" readonly >{{ $selected_description }}</textarea>
        </div>
        <div class="input-group mb-3">
        <span class="input-group-text">วันที่เขียน</span>
        <input type="text" class="form-control" value="{{ $test->created_at->format('d/m/Y') }}" readonly>
        </div>
        <button onclick="history.back()" class="btn btn-danger btn-sm">ย้อนกลับ</button>
    </div>

</x-app-layout>