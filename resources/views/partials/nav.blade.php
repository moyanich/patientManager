<div class="row align-items-start">
    <div class="col p-0">
        <ul class="nav nav-pills mb-3" id="pills-tab">
            <li class="nav-item">
                <x-patient-nav-link :href="route('patients.summary', $patient->id)" :active="request()->routeIs('patients.summary', $patient->id)">
                    {{ __('Summary') }}
                </x-patient-nav-link>
            </li>
            <li class="nav-item">
                <x-patient-nav-link :href="route('patients.show', $patient->id)" :active="request()->routeIs('patients.show', $patient->id)">
                    {{ __('Patient Profile') }}
                </x-patient-nav-link>
            </li>

        </ul>
    </div>
</div>

{{--  
<x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
    {{ __('Dashboard') }}
</x-responsive-nav-link>--}}