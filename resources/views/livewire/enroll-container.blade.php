<h4>
    @if($userRoles->isEmpty())
    <i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Enroll as a Student  <a href="#" class="font-weight-normal" wire:click="assignStudentRole">Click here</a></span>
    @else 
     <i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Dashboard </span>
    @endif
</h4>

@push('scripts')
    <script>
        document.addEventListener('livewire:load', function () {
            Livewire.on('roleAssigned', message => {
                alert(message);
            });
        });
    </script>
@endpush
