<x-app-layout>
<center>
    <br>
    <div class="col-md-7 col-lg-8">
        <form method="POST" action="{{ route('register') }}">
            <img src="{{ URL('img/Logo.png') }}" alt="" width="150" height="120" class="d-inline-block align-text-top">
            <br>

            <h4 class="mb-3">เขียนบันทึก</h4>
            

            @csrf

            <!-- userName -->
        
            <div class="form-floating">
                <input type="name" class="form-control" id="user_id" name="user_id" placeholder="{{ Auth::user()->name }}" required autocomplete="{{ Auth::user()->name }}">
                <label for="user_id">ผู้เขียน</label>
                <x-input-error :messages="$errors->get('{{ Auth::user()->name }}')" class="mt-2" />
            </div>

            <!-- Email Address -->

            <div class="form-floating">
                <input type="name" class="form-control" id="title" name="title" placeholder="title" required autocomplete="title">
                <label for="title">หัวเรื่อง</label>
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            <div class="form-floating">
                <input type="name" class="form-control" id="detail" placeholder="detail" name="detail" required autocomplete="detail">
                <label for="detail">เขียนข้อความ</label>
                <x-input-error :messages="$errors->get('detail')" class="mt-2" />
            </div>
        
            <div class="flex items-center justify-end mt-4">

                <x-primary-button class="ms-4" style="background-color: #ff66c4;">
                    {{ __('Save') }}
                </x-primary-button>
            </div>
        </form>
    </div>
    
</center>
<br>
<br>
</x-app-layout>