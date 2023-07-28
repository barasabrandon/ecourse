    <!-- Centered forms -->
    <div class="row">
        <div class="col-md-6">
<!-- Basic datatable -->
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Chats</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="reload"></a>
                <a class="list-icons-item" data-action="remove"></a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
          <div class="col-10">
            <div class="chat-container">
              <ul class="list-unstyled chat-list">
                @foreach ($chats as $item)
                @if ($item->user_id == auth()->user()->id)
                    <li wire:key="{{ $item->id }}" class="chat-item mb-2 ml-3 p-2 bg-teal-700 text-white rounded-lg">
                        <div class="sender-info">
                        <span class="sender-name">{{$item->name}}</span>
                        </div>
                        <div class="message">
                        {{$item->message}}
                        </div>
                    </li>
                @else
                    <li wire:key="{{ $item->id }}" class="chat-item mb-2 mr-3 p-2 bg-teal-400 text-white rounded-lg">
                        <div class="sender-info">
                        <span class="sender-name">{{$item->name}}</span>
                        </div>
                        <div class="message">
                        {{$item->message}}
                        </div>
                    </li>   
                @endif
                @endforeach
                <!-- Add more chat messages here -->
              </ul>
            </div>
          </div>
        </div>
      </div>
      
        
      
</div>
<!-- /basic datatable -->

        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <div class="header-elements-inline">
                                <h5 class="card-title">New Message</h5>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <form wire:submit.prevent="submit"> 
                                <div class="form-group">
                                 <textarea wire:model="message" class="form-control" placeholder="Enter message"></textarea>
                                 @error('message') <span class="error">{{ $message }}</span> @enderror
                                </div>  
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Send <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /form centered -->