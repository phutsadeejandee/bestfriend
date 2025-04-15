<x-app-layout>
    
    <br>
    

    <div class="container">
        <div class="row align-items-md-stretch">

            <div class="col-6 col-md-4">
                <p class="fs-4" style="color: #ff66c4;"><b>คำแนะนำ</b></p>
                <div class="pt-3 mt-4 text-muted border-top"></div>
                <div class="list-group">
                @forelse($advices as $advice)
                    <div class="list-group">
                        <a href="{{ route('advice.show', $advice->id) }}" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">ชื่อเรื่อง : {{ $advice->title }}</h5>
                                <small class="text-body-secondary">updated_at : {{ $advice->updated_at->format('d/m/Y') }}</small>
                            </div>
                            <p class="mb-1">{{ Str::limit($advice->detail, 100) }} ...</p>
                            <small class="text-body-secondary">created_at : {{ $advice->created_at->format('d/m/Y') }}</small>
                        </a>
                    </div>
                @empty
                    <div class="list-group">No Advices Found</div>
                @endforelse
                </div>
                <!-- แสดงลิงก์แบ่งหน้า -->
                {{ $advices->links() }}
            </div>
            <div class="col-6 col-md-4">
                <p class="fs-4" style="color: #ff66c4;"><b>วันของฉัน</b></p>
                <div class="pt-3 mt-4 text-muted border-top"></div>

                <div class="list-group">
                    @forelse($mydays as $myday)
                        <div class="list-group">
                            <a href="{{ route('myday.show', $myday->id) }}" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">ชื่อเรื่อง : {{ $myday->title }}</h5>
                                    <small class="text-body-secondary">updated_at : {{ $myday->updated_at->format('d/m/Y') }}</small>
                                </div>
                                <p class="mb-1">{{ Str::limit($myday->detail, 100) }} ...</p>
                                <small class="text-body-secondary">created_at : {{ $myday->created_at->format('d/m/Y') }}</small>
                            </a>
                        </div>
                    @empty
                        <div class="list-group">No Advices Found</div>
                    @endforelse
                    </div>
                    <!-- แสดงลิงก์แบ่งหน้า -->
                    {{ $mydays->links() }}
            </div>

            <div class="col-6 col-md-4">
                <p class="fs-4" style="color: #ff66c4;"><b>ผลการทดสอบ</b></p>
                <div class="pt-3 mt-4 text-muted border-top"></div>

                <div class="list-group">
                    @forelse($tests as $test)
                        <div class="list-group">
                            <a href="{{ route('test.show', $test->id) }}" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">ชื่อเรื่อง : {{ $test->personality_type }}</h5>                                
                                </div>                      
                                <small class="text-body-secondary">created_at : {{ $test->created_at->format('d/m/Y') }}</small>
                            </a>
                        </div>
                    @empty
                        <div class="list-group">No Advices Found</div>
                    @endforelse
                    </div>
                    <!-- แสดงลิงก์แบ่งหน้า -->
                    {{ $mydays->links() }}
            </div>

        </div>
    </div>

    <div class="pt-3 mt-4 text-muted border-top"></div>


</x-app-layout>
