Chào quý khách, quý khách đã đặt hàng tại Shop Fashion
Danh sách đơn hàng:
<table class="shop-table">
    <thead>
    <tr>
        <th>
            Image
        </th>
        <th>
            tên Sản phẩm
        </th>
        <th>
            Giá
        </th>
        <th>
            Số lượng
        </th>
    </tr>
    </thead>
    <tbody>
    {{--@foreach($data as $item)--}}
        <tr>
            <td>
                {{--<img src="upload/{!! $item->options['size'] !!}" alt="">--}}
            </td>
            <td>
                <div class="shop-details">
                    <div class="productname">
                        {!! $ten !!}
                    </div>
                </div>
            </td>
            <td>
                <h5>
                    {!!number_format($gia,0,",",".") !!}
                </h5>
            </td>
            <td>
                {!! $soluong !!}
            </td>
        </tr>
    {{--@endforeach--}}
    </tbody>
</table>
Bộ phận giao hàng sẽ liên lạc với bạn để giao hàng, chú ý bạn hãy giữ liên lạc để việc giao hàng thành công!
cảm ơn quý khách!
