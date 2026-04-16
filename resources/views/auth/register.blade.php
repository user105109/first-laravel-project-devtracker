<x-layout>
    <section class="bg-base-100 min-w-screen flex items-center justify-center">
        <div class="w-full max-w-md mx-auto px-4">
            <!-- Card principale en base-200 pour un léger relief -->
            <div class="card bg-base-200 shadow-2xl border border-base-300">
                <div class="card-body p-8 space-y-6">

                    <h1 class="card-title text-3xl font-bold text-primary tracking-tight">
                        Create an account
                    </h1>

                    <form action="/register" method="POST" class="space-y-5">
                        @csrf

                        <!-- Full Name -->
                        <div class="form-control w-full">
                            <label class="label" for="name">
                                <span class="label-text font-semibold text-base-content/80">Full Name</span>
                            </label>
                            <input type="text" name="name" id="name"
                                   class="input input-bordered bg-base-300 focus:input-primary text-base-content"
                                   placeholder="John doe" required value="{{ old('name') }}">
                            @error('name')
                            <span class="text-error text-xs mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="form-control w-full">
                            <label class="label" for="email">
                                <span class="label-text font-semibold text-base-content/80">Email Address</span>
                            </label>
                            <input type="email" name="email" id="email"
                                   class="input input-bordered bg-base-300 focus:input-primary text-base-content"
                                   placeholder="name@company.com" required value="{{ old('email') }}">
                        </div>

                        <!-- Password -->
                        <div class="form-control w-full">
                            <label class="label" for="password">
                                <span class="label-text font-semibold text-base-content/80">Password</span>
                            </label>
                            <input type="password" name="password" id="password"
                                   class="input input-bordered bg-base-300 focus:input-primary text-base-content"
                                   placeholder="••••••••" required>
                        </div>

                        <!-- Submit -->
                        <div class="pt-2">
                            <button type="submit" class="btn btn-primary w-full text-lg uppercase tracking-widest shadow-lg">
                                Register
                            </button>
                        </div>

                        <p class="text-sm text-center text-base-content/60">
                            Already have an account?
                            <a href="/login" class="link link-primary font-bold no-underline hover:underline">
                                Login here
                            </a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>
