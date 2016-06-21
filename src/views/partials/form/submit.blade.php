<button 
	class="{{ $options['class'] }}" 
	@if(isset($options['form'])) form="{{ $options['form'] }}" @endif
	@if(isset($options['id'])) id="{{ $options['id'] }}" @endif
	type="<?php echo isset($options['type']) ? $options['type'] : 'submit' ?>">
	@if(isset($options['icon'])) <span class="fa {{ $options['icon'] }}"></span> @endif <span>{{ $value }}</span>
</button>