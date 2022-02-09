<div>
   <label for="{{ $id }}" class="block text-sm font-medium text-gray-700">
      {{ $label }}
   </label>
   <div class="mt-1">
      <input 
         id="{{ $id }}" 
         name="{{ $id }}"
         type="{{ $type ?? 'text' }}" 
         required
         class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 
         focus:outline-none focus:ring-sky-500 focus:border-sky-500 sm:text-sm"
      >
   </div>
</div>