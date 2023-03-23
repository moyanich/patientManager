<div class="row mb-4">
    <div class="col-8">
        <div class="d-flex align-items-start align-items-sm-center gap-4">
            <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar">
            <div class="button-wrapper">
                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                <span class="d-none d-sm-block">Upload new photo</span>
                <i class="bx bx-upload d-block d-sm-none"></i>
                <input type="file" name="photo" id="upload" class="account-file-input  @error('photo') is-invalid @enderror" hidden="" accept="image/png, image/jpeg, image/jpg"></label>
                @error('photo')
                    <p class="text-xs text-red-600">{{ $message }}</p>
                @enderror

                <button type="button" class="btn btn-outline-secondary account-image-reset mb-4"><i class="bx bx-reset d-block d-sm-none"></i><span class="d-none d-sm-block">Reset</span></button>

                <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>

              {{--  <div class="relative w-full mb-3 px-4">
                    {{ Form::label('file', 'Update Document', ['class' => 'block uppercase text-blueGray-600 text-xs font-bold mb-2']) }}

                    <input type="file" name="file" class="border-0 px-3 py-3 text-blueGray-600 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" accept=".jpg,.jpeg,.bmp,.png,.gif,.doc,.docx,.csv,.rtf,.xlsx,.xls,.txt,.pdf,.zip">

                    @error('file')
                        <p class="text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>
               --}}


            </div>
        </div>
    </div>

    <div class="col-12 col-md-4">
        <label for="employee_no" class="form-label required-text">Employee No.</label>
        <input id="employee_no"
            type="text"
            name="employee_no"
            value = "{{ old('employee_no') }}"
            class="form-control @error('employee_no') is-invalid @enderror">
        
        @error('employee_no')
            <span class="mt-2 invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
</div>
