<x-app-layout>
    <div class="container mt-5">
        <div class="card shadow rounded-4 border-0">
            <div class="card-body text-center p-5">
                <h2 class="mb-4">🧠 ผลลัพธ์บุคลิกภาพของคุณ</h2>

                <h1 class="display-3 fw-bold text-primary mb-3">{{ $type }}</h1>

                <p class="lead">{{ $description }}</p>

                <hr class="my-4">

                <a href="{{ route('test.index') }}" class="btn btn-outline-primary mt-3">🔁 ทำแบบทดสอบใหม่</a>
            </div>
        </div>
    </div>
</x-app-layout>