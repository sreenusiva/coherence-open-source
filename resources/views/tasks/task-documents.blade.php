<div class="row">
        <div class="col-md-7 pull-left">
            <strong>
                <h4>Task Documents</h4>
            </strong>
        </div>
        <div class="col-md-5 text-right ml-auto m-b-30">
            <a href="" class="btn btn-w-m btn-success add-documents" data-target="#add_documents" data-toggle="modal"><i class="ri-add-line"></i> Add</a>
        </div>
    </div>
@if($task->documents->count() > 0 )
                               
                                <div class="row">
                                    @foreach($task->documents as $document)
                                    <div class="col-sm-3 col-md-3 doc-repeat">
                                        <a target="_blank" href="{{ asset('storage/'.$document->path)}}">
                                            <p
                                                style="font-size:14px;text-align: center; border:1px solid #eee;padding:10px;    word-break: break-word;">
                                                <i class="fa fa-file clear" aria-hidden="true"
                                                    style="font-size:25px;"></i> {{ \Illuminate\Support\Str::limit(explode('/', $document->path)[2], 25, $end='...') }}
                                            </p>
                                        </a>
                                        <a href="{{url('/tasks/delete-document/'.$document->id)}}"
                                            class="delete-doc text-danger"
                                            style="position: absolute;top: 5px;right: 25px;"><i
                                                class="ri-delete-bin-line" aria-hidden="true"></i></a>
                                    </div>
                                    @endforeach
                                </div>
                                @endif