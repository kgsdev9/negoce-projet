<form action="{{ route('transaction.store') }}" method="POST" enctype="multipart/form-data">
    @csrf  
    
    <input type="text" name="title" value="{{ old('title') ?? 'title numero 1'}}">
    <input type="text" name="mini_description" value="{{ old('mini_description')?? 'mini_description' }}" value="description 1"> 
    
    <input type="file" name="image" >
    <textarea name="description" id="" cols="30" rows="10">Description complete de la prestation</textarea>
    
    <button type="submit">Créer la prestation </button>
    </form>