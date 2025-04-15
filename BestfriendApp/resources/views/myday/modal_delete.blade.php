<!-- Modal Delete -->
<div class="modal fade" id="modalDelete" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <form method="POST" action="{{ route('myday.destroy', ['id' => $myday->id]) }}">
        @csrf
        @method('DELETE')
        <input type="hidden" name="id" id="delete_id">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">ยืนยันการลบ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                คุณแน่ใจหรือไม่ว่าต้องการลบรายการนี้?
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger">ลบ</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
            </div>
        </div>
    </form>
  </div>
</div>
