<div role="dialog"  class="modal fade " style="display: none;">
    {!! Form::model($ticket, ['url' => route('postEditTicket', ['ticket_id' => $ticket->id, 'event_id' => $event->id]), 'class' => 'ajax']) !!}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3 class="modal-title">
                    <i class="ico-ticket"></i>
                    Edit Ticket: <em>{{$ticket->title}}</em></h3>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    {!! Form::label('title', trans('manageevent.ticket-title'), ['class'=>'control-label required']) !!}
                    {!!  Form::text('title', null,['class'=>'form-control', 'placeholder'=>'E.g: General Admission']) !!}
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            {!! Form::label('price', trans('manageevent.ticket-price'), ['class'=>'control-label required']) !!}
                            {!!  Form::text('price', null,['class' => 'form-control', 'placeholder' => 'E.g: 25.99']) !!}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            {!! Form::label('quantity_available', trans('manageevent.quantity-available), ['class'=>' control-label']) !!}
                            {!!  Form::text('quantity_available', null, ['class' => 'form-control', 'placeholder' => 'E.g: 100 (Leave blank for unlimited)']) !!}
                        </div>
                    </div>
                </div>

                <div class="form-group more-options">
                    {!! Form::label('description', trans('manageevent.ticket-description'), ['class'=>'control-label']) !!}
                    {!!  Form::text('description', null,['class'=>'form-control']) !!}
                </div>

                <div class="row more-options">
                    <div class="col-sm-6">
                        <div class="form-group">
                            {!! Form::label('start_sale_date', trans('manageevent.start-sale-on'), ['class'=>' control-label']) !!}

                            {!!  Form::text('start_sale_date', $ticket->getFormattedDate('start_sale_date'),
                                [
                                    'class' => 'form-control start hasDatepicker',
                                    'data-field' => 'datetime',
                                    'data-startend' => 'start',
                                    'data-startendelem' => '.end',
                                    'readonly' => ''
                                ]) !!}
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            {!!  Form::label('end_sale_date', trans('manageevent.end-sale-on'),
                                        [
                                    'class'=>' control-label '
                                ])  !!}
                            {!!  Form::text('end_sale_date', $ticket->getFormattedDate('end_sale_date'),
                                [
                                    'class' => 'form-control end hasDatepicker',
                                    'data-field' => 'datetime',
                                    'data-startend' => 'end',
                                    'data-startendelem' => '.start',
                                    'readonly' => ''
                                ])  !!}
                        </div>
                    </div>
                </div>

                <div class="row more-options">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('min_per_person', trans('manageevent.minumum-ticket-per-order'), ['class'=>' control-label']) !!}
                           {!! Form::selectRange('min_per_person', 1, 100, null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('max_per_person', trans('manageevent.max-ticket-per-order'), ['class'=>' control-label']) !!}
                           {!! Form::selectRange('max_per_person', 1, 100, null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
                <div class="row more-options">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="custom-checkbox">
                                {!! Form::checkbox('is_hidden', null, null, ['id' => 'is_hidden']) !!}
                                {!! Form::label('is_hidden', trans('manageevent.hide-ticket'), array('class'=>' control-label')) !!}
                            </div>

                        </div>
                    </div>
                </div>
                <a href="javascript:void(0);" class="show-more-options">
                    {{ trans('manageevent.more-options') }}
                </a>
            </div> <!-- /end modal body-->
            <div class="modal-footer">
               {!! Form::button(trans('common.cancel'), ['class'=>"btn modal-close btn-danger",'data-dismiss'=>'modal']) !!}
                {!! Form::submit('Save Ticket', ['class'=>"btn btn-success"]) !!}
            </div>
        </div><!-- /end modal content-->
       {!! Form::close() !!}
    </div>
</div>
