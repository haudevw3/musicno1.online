<div id="datatable" class="datatable card shadow">
    <div class="card-header fw-semibold">Bảng dữ liệu</div>

    <div class="card-body">
        <div class="datatable-top d-flex justify-content-between">
            @include('adm::components.table-header')
        </div>

        <div class="datatable-container mt-20">
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            <x-core::check-box id="checkbox"></x-core::check-box>
                        </th>
                        <th>STT</th>
                        <th>Tên nghệ sĩ</th>
                        <th>Tên đường dẫn</th>
                        <th>Tất cả album</th>
                        <th>Cập nhật gần đây</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($artists as $key => $artist)
                        @php $key++ @endphp

                        <tr id="row-{{ $key }}">
                            <th>
                                <x-core::checkbox id="checkbox-{{ $key }}" name="artist_ids[]" value="{{ $artist->_id }}"></x-core::checkbox>
                            </th>
                            <td>{{ $key }}</td>
                            <td>{{ $artist->name }}</td>
                            <td>{{ $artist->slug }}</td>
                            <td></td>
                            <td>{{ $artist->updated_at }}</td>
                            <td>
                                @include('adm::components.table-action-manage-artist')
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="datatable-bottom items-align-vertical-center-end mt-20">
            <x-core::pagination :paginator="$paginator"></x-core::pagination>
        </div>
    </div>
</div>