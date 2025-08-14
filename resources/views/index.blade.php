<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
    <div class="mx-auto grid max-w-screen-xl px-4 py-40 mb-40 md:grid-cols-12 lg:gap-12 lg:pb-16 xl:gap-0">
      <!-- Bagian kiri -->
      <div class="content-center justify-self-start md:col-span-7 md:text-start">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight dark:text-white md:max-w-2xl md:text-5xl xl:text-6xl">
            Check Your Solo<span class="text-blue-600">Net</span> Internet Bills Instantly!
        </h1>
        <p class="mb-6 max-w-2xl text-gray-500 dark:text-gray-400 md:mb-8 md:text-lg lg:mb-5 lg:text-xl">
            Stay Connected – View Your Current Balance and Due Date in Seconds!
        </p>

        <!-- FORM DIPINDAHKAN KE SINI -->
        <form action="/" method="POST" class="bg-gray-50 dark:bg-gray-800 p-5 rounded-lg shadow-md">
            @csrf
            <div class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- User ID -->
                    <div class="relative w-full">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 7.205c4.418 0 8-1.165 8-2.602C20 3.165 16.418 2 12 2S4 3.165 4 4.603c0 1.437 3.582 2.602 8 2.602ZM12 22c4.963 0 8-1.686 8-2.603v-4.404c-.052.032-.112.06-.165.09a7.75 7.75 0 0 1-.745.387c-.193.088-.394.173-.6.253-.063.024-.124.05-.189.073a18.934 18.934 0 0 1-6.3.998c-2.135.027-4.26-.31-6.3-.998-.065-.024-.126-.05-.189-.073a10.143 10.143 0 0 1-.852-.373 7.75 7.75 0 0 1-.493-.267c-.053-.03-.113-.058-.165-.09v4.404C4 20.315 7.037 22 12 22Zm7.09-13.928a9.91 9.91 0 0 1-.6.253c-.063.025-.124.05-.189.074a18.935 18.935 0 0 1-6.3.998c-2.135.027-4.26-.31-6.3-.998-.065-.024-.126-.05-.189-.074a10.163 10.163 0 0 1-.852-.372 7.816 7.816 0 0 1-.493-.268c-.055-.03-.115-.058-.167-.09V12c0 .917 3.037 2.603 8 2.603s8-1.686 8-2.603V7.596c-.052.031-.112.059-.165.09a7.816 7.816 0 0 1-.745.386Z"/>
                            </svg>
                        </div>
                        <input class="block p-3 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-full border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" pattern="[^']*" placeholder="Enter your register number" type="text" id="registId" name="registId" required>
                    </div>
                    <!-- Phone Number -->
                    
                    <div class="relative w-full">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.05-.24 11.36 11.36 0 003.55.57 1 1 0 011 1v3.61a1 1 0 01-1 1A17 17 0 013 5a1 1 0 011-1h3.61a1 1 0 011 1 11.36 11.36 0 00.57 3.55 1 1 0 01-.24 1.05l-2.32 2.19z"/>
                            </svg>
                        </div>
                        <input class="block p-3 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-full border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" pattern="[^']*" placeholder="Enter your phone number" type="tel" id="phone" name="phone" required>
                    </div>
                </div>
                <button type="submit" class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 cursor-pointer">
                    Check Bill
                </button>
            </div>
        </form>
      </div>

      <!-- Bagian kanan -->
      <div class="hidden md:col-span-5 md:mt-0 md:flex">
        <img class="dark:hidden hover:opacity-90 duration-200" src="./img/girl-shopping-list.svg" alt="shopping illustration" />
        <img class="hidden dark:block hover:opacity-90 duration-200" src="./img/girl-shopping-list-dark.svg" alt="shopping illustration" />
      </div>
    </div>
  </section>
@if(isset($bills) && $bills->count() > 0)
<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5" id="result">
    <div class="content-center justify-self-center md:col-span-7 md:text-center py-16">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight dark:text-white md:max-w-2xl md:text-5xl xl:text-6xl text-center">
            Result
        </h1>
    </div>
    <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <div class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                        <div class="px-4 py-3 w-full text-center"><b>IDENTITY</b></div>
                    </div>
                    <tbody>
                        <tr class="border-b dark:border-gray-700">
                            <th class="px-4 py-3">Name</th>
                            <td class="px-4 py-3 w-1">:</td>
                            <td class="px-4 py-3">{{ $bills->first()->user->name }}</td>
                        </tr>
                        <tr class="border-b dark:border-gray-700">
                            <th class="px-4 py-3">Register Number</th>
                            <td class="px-4 py-3 w-1">:</td>
                            <td class="px-4 py-3">{{ $bills->first()->user->regist_number }}</td>
                        </tr>
                        <tr class="border-b dark:border-gray-700">
                            <th class="px-4 py-3">VA Number</th>
                            <td class="px-4 py-3 w-1">:</td>
                            <td class="px-4 py-3">{{ $bills->first()->user->va_number }}</td>
                        </tr>
                        <tr class="border-b dark:border-gray-700">
                            <th class="px-4 py-3">E-mail</th>
                            <td class="px-4 py-3 w-1">:</td>
                            <td class="px-4 py-3">{{ $bills->first()->user->email }}</td>
                        </tr>
                        <tr class="border-b dark:border-gray-700">
                            <th class="px-4 py-3">Phone Number</th>
                            <td class="px-4 py-3 w-1">:</td>
                            <td class="px-4 py-3">{{ $bills->first()->user->phone_number }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br><br>
    <div class="mx-auto max-w-screen-xl px-4 lg:px-12 mb-16">
        <!-- Start coding here -->
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">No.</th>
                            <th scope="col" class="px-4 py-3">Package</th>
                            <th scope="col" class="px-4 py-3">Month</th>
                            <th scope="col" class="px-4 py-3">Price</th>
                            <th scope="col" class="px-4 py-3">Deadline</th>
                            <th scope="col" class="px-4 py-3">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bills as $bill)
                            @php
                                $dropdownId = 'dropdown-' . $loop->iteration;
                            @endphp
                            <tr class="border-b dark:border-gray-700">
                                <td class="px-4 py-3">{{ $loop->iteration }}</td>
                                <td class="px-4 py-3">{{ $bill->package }}</td>
                                <td class="px-4 py-3">{{ $bill->month }}</td>
                                <td class="px-4 py-3">{{ $bill->price }}</td>
                                <td class="px-4 py-3">{{ $bill->deadline }}</td>
                                <td class="px-4 py-3 {{ $bill->status == 'Paid' ? 'text-green-500' : 'text-red-500' }}">
                                    {{ $bill->status }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@elseif(isset($bills))
    <div class="text-center bg-gray-50 text-gray-500 dark:text-gray-400 py-10">
        There is no such a record.
    </div>
@endif
</x-layout>