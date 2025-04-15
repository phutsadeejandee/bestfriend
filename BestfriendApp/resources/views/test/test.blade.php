<x-app-layout>

    <br>
  <center><h1 class="display-5 fw-bold lh-1 mb-3" style="color: #ff66c4;">แบบประเมิน Introvert vs Extrovert </h1></center>
  <br>
    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif
  <div class="container">
    <div class="row align-items-md-stretch">
        <div class="col-md-6">
        <form action="{{ route('test.upload') }}" method="POST">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">คนเขียน</span>
                <input type="text" class="form-control" aria-label="Sizing example input" name="user_id" id="user_id" aria-describedby="inputGroup-sizing-default" value="{{ Auth::user()->id }}" disabled>
            </div>
            <!-- 1. Group E/I -->
            <h3>กลุ่ม E (Extrovert) vs I (Introvert)</h3>
            <div class="container">
                @foreach ($e_i_questions as $index => $question)
                    <div class="mb-3">
                        <label class="form-label">{{ $question['question'] }}</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question{{ $index+1 }}" value="E" required>
                            <label class="form-check-label">A. {{ $question['option_a'] }}</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question{{ $index+1 }}" value="I" required>
                            <label class="form-check-label">B. {{ $question['option_b'] }}</label>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- 2. Group S/N -->
            <h3>กลุ่ม S (Sensing) vs N (Intuition)</h3>
            <div class="container">
                @foreach ($s_n_questions as $index => $question)
                    <div class="mb-3">
                        <label class="form-label">{{ $question['question'] }}</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question{{ $index+11 }}" value="S" required>
                            <label class="form-check-label">A. {{ $question['option_a'] }}</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question{{ $index+11 }}" value="N" required>
                            <label class="form-check-label">B. {{ $question['option_b'] }}</label>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- 3. Group T/F -->
            <h3>กลุ่ม T (Thinking) vs F (Feeling)</h3>
            <div class="container">
                @foreach ($t_f_questions as $index => $question)
                    <div class="mb-3">
                        <label class="form-label">{{ $question['question'] }}</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question{{ $index+21 }}" value="T" required>
                            <label class="form-check-label">A. {{ $question['option_a'] }}</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question{{ $index+21 }}" value="F" required>
                            <label class="form-check-label">B. {{ $question['option_b'] }}</label>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- 4. Group J/P -->
            <h3>กลุ่ม J (Judging) vs P (Perceiving)</h3>
            <div class="container">
                @foreach ($j_p_questions as $index => $question)
                    <div class="mb-3">
                        <label class="form-label">{{ $question['question'] }}</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question{{ $index+31 }}" value="J" required>
                            <label class="form-check-label">A. {{ $question['option_a'] }}</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question{{ $index+31 }}" value="P" required>
                            <label class="form-check-label">B. {{ $question['option_b'] }}</label>
                        </div>
                    </div>
                @endforeach
                </div>

                <!-- Submit -->
            <button type="submit" class="btn btn-primary">บันทึก</button>
        </form>
        </div>
        <div class="col-md-6">
        <table class="table text-center">
            <thead class="table">
                <tr class="table-warning">
                    <th>#</th>
                    <th>ประเภทบุคลิกภาพ (Personality Type)</th>
                    <th>วันที่ทำแบบทดสอบ</th>
                    <th>ดูคำอธิบาย</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($tests as $index => $test)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td><strong>{{ $test->personality_type }}</strong></td>
                        <td>{{ $test->created_at->format('d/m/Y') }}</td>
                        <td>
                            <a href="{{ route('test.show', $test->id) }}" class="btn btn-success btn-sm" style="color: white;">เรียกดู</a>
                        </td>
                        <td>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">ยังไม่มีข้อมูล</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
</div>
    
        
    </div>
  <br>

  <div class="pt-3 mt-4 text-muted border-top"></div>
</x-app-layout>
