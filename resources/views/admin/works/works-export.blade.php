<table>
    <thead>
        <tr class="font-bold">
            <th>N°</th>
            <th>Nombre de la obra</th>
            <th>Estado de obra</th>
            <th>Tipo de Obra</th>
            <th>Encargado</th>
            <th>Dpto. / Ciudad</th>
            <th>Contratante</th>
            <th>Dir. Contratante</th>
            <th>Duración de la obra (Meses)</th>
            <th>Fecha de Inicio</th>
            <th>Fecha de Conclusión</th>
            <th>Descripción</th>
            <th>Cantidad de servicios</th>
            <th>Valor aprox. de servicios (Bs.)</th>
            <th>Servicios</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($works as $work)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $work->name }}</td>
                <td>
                    @if ($work->status === 1)
                        Activo
                    @else
                        Inhabilitado
                    @endif
                </td>
                <td>{{ $work->type_work->name }}</td>
                <td>{{ $work->user->name }}</td>
                <td>{{ $work->city->state->name .' / '. $work->city->name ?? '' }}</td>
                <td>{{ $work->name_contractor }}</td>
                <td>{{ $work->address_contractor }}</td>
                <td>{{ $work->work_duration }} {{ __('Meses') }}</td>
                <td>{{ $work->start_date->format('d-m-Y') }}</td>
                <td>
                    @if ($work->completion_date)
                        {{ $work->completion_date->format('d-m-Y') }}
                    @else
                        En ejecución
                    @endif
                </td>
                <td>{{ $work->description }}</td>
                <td>{{ $work->services->count() }} {{ __('Servicios') }}</td>
                <td>{{ $work->value_approximate_services }}</td>
                <td>
                    @forelse ($work->services as $service)
                        {{ $service->name }}
                    @empty
                        {{ __('Sin Servicios') }}
                    @endforelse
                </td>
            </tr>
        @empty
            <tr>{{ __('Sin datos...') }}</tr>
        @endforelse
    </tbody>
</table>