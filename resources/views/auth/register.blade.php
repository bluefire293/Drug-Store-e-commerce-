<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div>
                <x-label for="phone" value="{{ __('Phone') }}" />
                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="date_of_birth" value="{{ __('Date of Birth') }}" />
                <x-input id="date_of_birth" class="block mt-1 w-full" type="date" name="date_of_birth" />
            </div>

            <div class="mt-4">
                <x-label for="gender" value="{{ __('Choose Gender :') }}" />
                <select name="gender" class="block mt-1 w-full border-gray-300 focus:border-indigo-300">

                <option value="1">Male</option>
                <option value="2">Female</option>

                </select>
            </div>

            <div class="mt-4">
                <x-label for="address" value="{{ __('Address') }}" />
                <x-input id="address" class="block mt-1 w-full" type="text" name="address" />
            </div>

            <div class="mt-4">
                <x-label for="city" value="{{ __('City :') }}" />
                <select name="city" class="block mt-1 w-full border-gray-300 focus:border-indigo-300">

                <option value="1">Aceh - Banda Aceh</option>
                <option value="2">Aceh - Langsa</option>
                <option value="3">Aceh - Lhokseumawe</option>
                <option value="4">Aceh - Sabang</option>
                <option value="5">Aceh - Subulussalam</option>
                <option value="6">Bali - Denpasar</option>
                <option value="7">Bangka Belitung - Pangkalpinang</option>
                <option value="8">Banten - Cilegon</option>
                <option value="9">Banten - Serang</option>
                <option value="10">Banten - Tangerang Selatan</option>
                <option value="11">Banten - Tangerang</option>
                <option value="12">Bengkulu - Bengkulu</option>
                <option value="13">Daerah Istimewa Yogyakarta - Yogyakarta</option>
                <option value="14">Gorontalo - Gorontalo</option>
                <option value="15">Jakarta - Kota Administrasi Jakarta Barat</option>
                <option value="16">Jakarta - Kota Administrasi Jakarta Pusat</option>
                <option value="17">Jakarta - Kota Administrasi Jakarta Selatan</option>
                <option value="18">Jakarta - Kota Administrasi Jakarta Timur</option>
                <option value="19">Jakarta - Kota Administrasi Jakarta Utara</option>
                <option value="20">Jambi - Sungai Penuh</option>
                <option value="21">Jambi - Jambi</option>
                <option value="22">Jawa Barat - Bandung</option>
                <option value="23">Jawa Barat - Bekasi</option>
                <option value="24">Jawa Barat - Bogor</option>
                <option value="25">Jawa Barat - Cimahi</option>
                <option value="26">Jawa Barat - Cirebon</option>
                <option value="27">Jawa Barat - Depok</option>
                <option value="28">Jawa Barat - Sukabumi</option>
                <option value="29">Jawa Barat - Tasikmalaya</option>
                <option value="30">Jawa Barat - Banjar</option>
                <option value="31">Jawa Tengah - Magelang</option>
                <option value="32">Jawa Tengah - Pekalongan</option>
                <option value="33">Jawa Tengah - Salatiga</option>
                <option value="34">Jawa Tengah - Semarang</option>
                <option value="35">Jawa Tengah - Surakarta</option>
                <option value="36">Jawa Tengah - Tegal</option>
                <option value="37">Jawa Timur - Batu</option>
                <option value="38">Jawa Timur - Blitar</option>
                <option value="39">Jawa Timur - Kediri</option>
                <option value="40">Jawa Timur - Madiun</option>
                <option value="41">Jawa Timur - Malang</option>
                <option value="42">Jawa Timur - Mojokerto</option>
                <option value="43">Jawa Timur - Pasuruan</option>
                <option value="44">Jawa Timur - Probolinggo</option>
                <option value="45">Jawa Timur - Surabaya</option>
                <option value="46">Kalimantan Barat - Pontianak</option>
                <option value="47">FeKalimantan Barat - Singkawang</option>
                <option value="48">Kalimantan Selatan - Banjarbaru</option>
                <option value="49">Kalimantan Selatan - Banjarmasin</option>
                <option value="50">Kalimantan Tengah - Palangkaraya</option>
                <option value="51">Kalimantan Timur - Balikapapn</option>
                <option value="52">Kalimantan Timur - Bontang</option>
                <option value="53">Kalimantan Timur - Samarinda</option>
                <option value="54">Kalimantan Timur - Nusantara</option>
                <option value="55">Kalimantan Utara - Tarakan</option>
                <option value="56">Kepulauan Riau - Batam</option>
                <option value="57">Kepulauan Riau - Tanjungpinang</option>
                <option value="58">Lampung - Bandarlampung</option>
                <option value="59">Lampu - Metro</option>
                <option value="60">Maluku Utara - Ternate</option>
                <option value="61">Maluku Utara - Tidore Kepulauan</option>
                <option value="62">Maluku - Ambon</option>
                <option value="63">Maluku - Tual</option>
                <option value="64">Nusa Tenggara Barat - Bima</option>
                <option value="65">Nusa Tenggara Barat - Mataram</option>
                <option value="66">Nusa Tenggara Timur - Kupang</option>
                <option value="67">Papua Barat Daya - Sorong</option>
                <option value="68">Papua - Jayapura</option>
                <option value="69">Riau - Dumai</option>
                <option value="70">Riau - Pekanbaru</option>
                <option value="71">Sulawesi Selatan - Makassar</option>
                <option value="72">Sulawesi Selatan - Palopo</option>
                <option value="73">Sulawesi Selatan - Parepare</option>
                <option value="74">Sulawesi Tengah - Palu</option>
                <option value="75">Sulawesi Tenggara - Baubau</option>
                <option value="76">Sulawesi Tenggara - Kendari</option>
                <option value="77">Sulawesi Utara - Bitung</option>
                <option value="78">Sulawesi Utara - Kotamobagu</option>
                <option value="79">Sulawesi Utara - Manado</option>
                <option value="80">Sulawesi Utara - Tomohon</option>
                <option value="81">Sumatera Bara - Bukittinggi</option>
                <option value="82">Sumatera Barat - Padang</option>
                <option value="83">Sumatera Barat - Padangpanjang</option>
                <option value="84">Sumatera Barat - Pariaman</option>
                <option value="85">Sumatera Barat - Payakumbuh</option>
                <option value="86">Sumatera Barat - Sawahlunto</option>
                <option value="87">Sumatera Barat - Solok</option>
                <option value="88">Sumatera Selatan - Lubuklinggau</option>
                <option value="89">Sumatera Selatan - Pagar Alam</option>
                <option value="90">Sumatera Selatan - Palembang</option>
                <option value="91">Sumatera Selatan - Prabumulih</option>
                <option value="92">Sumatera Utara - Binjai</option>
                <option value="93">Sumatera Utara - Gunung Sitoli</option>
                <option value="94">Sumatera Utara - Medan</option>
                <option value="95">Sumatera Utara - Padangsidimpuan</option>
                <option value="96">Sumatera Utara - Pematangsiantar</option>
                <option value="97">Sumatera Utara - Sibolga</option>
                <option value="98">Sumatera Utara - Tanjungbalai</option>
                <option value="99">Sumatera Utara - Tebingtinggi</option>

                </select>
            </div>

            <div class="mt-4">
                <x-label for="paypal_id" value="{{ __('Paypal ID') }}" />
                <x-input id="paypal_id" class="block mt-1 w-full" type="text" name="paypal_id" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
