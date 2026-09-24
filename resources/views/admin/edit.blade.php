<!DOCTYPE html>
<html lang="id">
@include('admin.layouts.header')
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        @include('admin.layouts.sidebar')

        <!-- Main Content -->
        <div class="container-fluid py-5 px-4" style="margin-left: -10px;">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card shadow border-0 rounded-4">
                        <div class="card-body p-5">
                            <h3 class="mb-4 fw-bold text-center">Edit Admin</h3>

                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form method="POST" action="{{ route('admin.update') }}">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="admin" class="form-label">Username Admin</label>
                                    <input type="text" class="form-control bg-light" id="admin" name="admin" value="{{ old('admin', $admin->admin) }}">
                                </div>


                                <div class="mb-3">
                                    <label for="katasandi" class="form-label">Password Baru</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" name="katasandi" id="katasandi" placeholder="Minimal 8 karakter">
                                        <span class="input-group-text">
                                            <i class="bi bi-eye-slash toggle-password" toggle="#katasandi" style="cursor:pointer;"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="katasandi_confirmation" class="form-label">Konfirmasi Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" name="katasandi_confirmation" id="katasandi_confirmation">
                                        <span class="input-group-text">
                                            <i class="bi bi-eye-slash toggle-password" toggle="#katasandi_confirmation" style="cursor:pointer;"></i>
                                        </span>
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-primary w-100 py-2 rounded-pill fw-bold">
                                    Simpan Perubahan
                                </button>
                            </form>

                            <div class="mt-3 text-center">
                                <a href="{{ route('admin.dashboard') }}" class="text-decoration-none">← Kembali ke Dashboard</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.toggle-password').forEach(function(eyeIcon) {
            eyeIcon.addEventListener('click', function() {
                const targetInput = document.querySelector(this.getAttribute('toggle'));
                const isPassword = targetInput.getAttribute('type') === 'password';

                targetInput.setAttribute('type', isPassword ? 'text' : 'password');
                this.classList.toggle('bi-eye');
                this.classList.toggle('bi-eye-slash');
            });
        });
    </script>


</body>
</html>
