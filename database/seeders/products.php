<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                "id" => 1,
                "name" => "Bonsai tam da quý tộc",
                "image" => "https://www.chaucaycanh.vn/wp-content/uploads/2021/06/35-the-cay-canh-bonsai-thu-hut-cac-nghe-nhan-nhat-hien-nay-23.jpg",
                "price" => 350000,
                "promotion_price" => 300000,
                "description" => "Thế bonsai này được tạo hình từ 2 cành và 1 ngọn, trước đây bonsai thế đa tam thì các tán được cắt tỉa tròn trịa như hình đĩa xôi , bởi theo quan niệm của người xưa thì phúc là phải tròn. Còn ngày nay, thế bonsai này đã được các nghệ nhân sáng tạo với phần cành và ngọn được cắt tỉa khá phóng khoáng, linh hoạt và tự nhiên hơn.",
                "supplier_id" => 4,
                "category_id" => 1
            ],
            [
                "id" => 2,
                "name" => "Cây tam da xanh",
                "image" => "https://tinhtanphongthuy.com/Images/image/BONSAI%20DAY%20%C4%90%E1%BB%92NG/TAM%20%C4%90A%20XANH.jpg",
                "price" => 600000,
                "promotion_price" => 550000,
                "description" => "Thế tam đa hay còn gọi là thế Phúc – Lộc – Thọ. Trong đó, đa phúc (nhiều con), đa lộc ( nhiều tiền của), đa thọ (sống lâu), và đây cũng chính là ước nguyện của con người từ xưa đến nay.",
                "supplier_id" => 4,
                "category_id" => 1
            ],
            [
                "id" => 3,
                "name" => "Bonsai tam da cổ mộc",
                "image" => "https://image-us.eva.vn/upload/2-2019/images/2019-04-23/cay-bonsai-va-cac-dang-day-co-y-nghia-phong-thuy-tai-loc-cay-bonsai-2-1556002964-795-width533height600.jpg",
                "price" => 470000,
                "promotion_price" => 400000,
                "description" => "Thế tam đa tượng trưng cho ba ông Phước, Lộc,Thọ; ba tàn đều tròn đều đẹp, tượng trưng cho sự vĩnh cửu, sung túc, hạnh phúc, giàu sang và sống lâu, theo tích ba ông Phước, Lộc, Thọ cũng rất hay.",
                "supplier_id" => 4,
                "category_id" => 1
            ],
            [
                "id" => 4,
                "name" => "Bonsai tam đa nghệ thuật",
                "image" => "https://hoacuatui.shop/wp-content/uploads/2023/06/bonsai-the-tam-da.jpg",
                "price" => 1000000,
                "promotion_price" => 850000,
                "description" => "Theo truyền thuyết kể lại Bonsai ra đời vào thời Hán. Khi hoàng đế ra lệnh tạo lập một sân vườn thu hút với các yếu tố thiên nhiên đặc biệt. Ông muốn mỗi một cảnh vật trong sân vườn đều mang nét riêng và không cây cảnh nào giống cây nào. Chính vì vậy mà những hình dáng cây cảnh đặc biệt cũng xuất hiện ngày một nhiều hơn.",
                "supplier_id" => 4,
                "category_id" => 1
            ],
            [
                "id" => 5,
                "name" => "Hải Châu lá nhỏ tam đa",
                "image" => "https://www.ibonsais.com/files/03-2022/ad9785/h%E1%BA%A3i-ch%C3%A2u-l%C3%A1-nh%E1%BB%8F-th%E1%BA%BF-tam-%C4%91a-b%E1%BB%87-r%E1%BA%A5-1265970810_large.webp",
                "price" => 880000,
                "promotion_price" => 880000,
                "description" => "Cây cảnh bonsai mini là một lựa chọn tuyệt vời để tạo điểm nhấn nghệ thuật và tạo không gian xanh tươi trong ngôi nhà của bạn. Với kích thước nhỏ gọn và hình dáng tinh tế, cây cảnh bonsai mini có thể được đặt trên bàn làm việc, kệ sách, hay thậm chí trên cửa sổ, tạo điểm nhấn thú vị cho không gian sống.",
                "supplier_id" => 5,
                "category_id" => 1
            ],
            [
                "id" => 6,
                "name" => "Bonsai thác đổ mơ ước",
                "image" => "https://hoisvcvn.org.vn/Uploads/images/c%C3%A2y%20th%C3%A1c%20%C4%91%E1%BB%95.jpg",
                "price" => 1200000,
                "promotion_price" => 1200000,
                "description" => "Dáng cây thác đổ hay còn gọi là cây kiểng thác nước thuộc cây cảnh có dáng huyền. Kiểu này có các nhánh thấp nhất, thấp hơn đáy chậu. Dáng cây này đẹp nhất là tạo kiểu như một ngọn thác chảy qua ghềnh đá là đẹp nhất.",
                "supplier_id" => 5,
                "category_id" => 2
            ],
            [
                "id" => 7,
                "name" => "Bonsai thác đổ kiên cường",
                "image" => "https://lasc.vn/wp-content/uploads/2020/08/cach-uon-cay-sanh-dang-thac-do-min.jpg",
                "price" => 2500000,
                "promotion_price" => 2250000,
                "description" => "Dáng cây thác đổ là dáng cây có thế kiểng cổ, với thế huyền độc thụ thân nằm bò qua miệng chậu. Như trải qua một trần cuồng phong bị xô ngã xuống ao. Dáng cây này khiến ngọn cây trông như bị bẻ cong, thòng xuống thấp hơn cả đáy chậu. Dáng thì mềm mại uốn cong hợp lý theo luật hồi đầu tự nhiên, vươn lên làm cây có từng bậc rất đẹp mắt. Biểu trưng cho sức sống làm cho thưởng ngoạn có cảm giác dễ chịu.",
                "supplier_id" => 5,
                "category_id" => 2
            ],
            [
                "id" => 8,
                "name" => "Sanh dáng bonsai thác nước",
                "image" => "https://lasc.vn/wp-content/uploads/2020/09/cach-uon-cay-sanh-dang-thac-do-02-min.jpg",
                "price" => 2000000,
                "promotion_price" => 2000000,
                "description" => "Cây đã mọc ở vách núi dựng đứng, hiểm trở, cheo leo, lại còn không có đất để ăn, rễ cây tự rút ruột mình ra từng chút axit nhỏ nhoi từng ly, từng tý một để phá hủy dần dần bề mặt đá, hết sức nhẫn nại, kiên trì bám hốc đá để tồn tại. Không chỉ có thế, thiên nhiên lại vô cùng khắc nghiệt, luôn gieo những tai họa khủng khiếp: lũ quét, nắng lửa, báo tố, mưa ngàn….",
                "supplier_id" => 5,
                "category_id" => 2
            ],
            [
                "id" => 9,
                "name" => "Bonsai dáng huyền nghệ thuật",
                "image" => "https://hoadepviet.com/wp-content/uploads/2017/04/bonsai-dang-huyen-4a.jpg",
                "price" => 3000000,
                "promotion_price" => 2730000,
                "description" => "Dáng cây – Bonsai styles để thể hiện phong cách làm cây, đây cũng là điều cơ bản nhất cần chú ý khi phối tiểu cảnh . Dựa trên độ nghiêng của cây so với mặt đất trong tự nhiên mà người ta phân thành 4 dáng cơ bản: dáng trực – Formal Upright, xiêu- Slanting, hoành – Semi-Cascade, huyền – Full Cascade. Chúng ta sẽ lần lượt tìm hiểu các dáng này trong seri bài viết này bạn nhé!",
                "supplier_id" => 6,
                "category_id" => 2
            ],
            [
                "id" => 10,
                "name" => "Bonsai thác đổ cổ xưa",
                "image" => "https://hoadepviet.com/wp-content/uploads/2017/04/bonsai-dang-huyen-8a.jpg",
                "price" => 1800000,
                "promotion_price" => 1800000,
                "description" => "Vẻ đẹp của cây dáng huyền được đúc kết từ khó khăn, gian khổ nên rất có hồn, có chiều sâu. Ngắm cây dáng thác đổ ta cảm nhận được sự nhẹ nhàng, uyển chuyển, kỳ thị, thơ mộng nhưng khoáng đạt. Với sức sống mãnh liệt, sự kiên cường vươn lên cây vẫn sống lơ lửng treo leo giữa mây trời, ngọn hướng về gốc rễ, cội nguồn.",
                "supplier_id" => 6,
                "category_id" => 3
            ],
            [
                "id" => 11,
                "name" => "Bonsai ngũ phúc-Thế ngũ phúc",
                "image" => "https://bonsaidep.vn/ckfinder/userfiles/images/41-the-bonsai-dep(18).jpg",
                "price" => 1000000,
                "promotion_price" => 1000000,
                "description" => "Thế cây ngũ phúc tương đối dễ uốn, ngũ phúc ở đây nghĩa là cây có 5 tầng lá và có hình dạng như hình nón lá. ",
                "supplier_id" => 6,
                "category_id" => 3
            ],
            [
                "id" => 12,
                "name" => "Bonsai ngũ phúc-Thế thoát tục",
                "image" => "https://bonsaidep.vn/ckfinder/userfiles/images/41-the-bonsai-dep(25).jpg",
                "price" => 1000000,
                "promotion_price" => 900000,
                "description" => "Thời gian trôi qua, một số cây phát triển những nơi hói hoặc không vỏ trên thân cây do điều kiện thời tiết khắc nghiệt. Phần hói thường bắt đầu tại nơi rễ mọc lên từ mặt đất, và ngày càng mỏng hơn khi nó tiếp tục lên thân cây",
                "supplier_id" => 6,
                "category_id" => 3
            ],
            [
                "id" => 13,
                "name" => "Bonsai song thụ Đậu tằm",
                "image" => "https://gspace.vn/web/media/images/2022/05/31/x17-rs650.jpg",
                "price" => 150000,
                "promotion_price" => 150000,
                "description" => "Bonsai Đậu tằm có hình dáng nhỏ gọn, lá xanh mát và thường được trồng trong chậu nhỏ. Nó thích hợp để đặt trong nhà hoặc văn phòng.",
                "supplier_id" => 7,
                "category_id" => 4
            ],
            [
                "id" => 14,
                "name" => "Bonsai song thụ Anh đào",
                "image" => "https://img.artpal.com/867752/72-22-12-6-7-38-58m.jpg",
                "price" => 120000,
                "promotion_price" => 100000,
                "description" => "Bonsai Anh đào nổi tiếng với bức hoạ hình ảnh tươi tắn của hoa anh đào nở rộ. Cây này thường được chăm sóc cẩn thận để giữ được hình dáng và hoa đẹp",
                "supplier_id" => 7,
                "category_id" => 4
            ],
            [
                "id" => 15,
                "name" => "Bonsai song thụ cổ thụ",
                "image" => "https://hgtvhome.sndimg.com/content/dam/images/hgtv/fullset/2019/5/15/0/RX_William_N_Valavanis_International_Bonsai-RAF-Scots-Twin-Trunk.jpg.rend.hgtvcom.1280.960.suffix/1557921571075.jpeg",
                "price" => 220000,
                "promotion_price" => 220000,
                "description" => "Bonsai Thụ thường có hình dáng cây rất tự nhiên, với cành lá xanh mướt. Nó tạo ra không gian tự nhiên trong những chậu nhỏ.",
                "supplier_id" => 7,
                "category_id" => 4
            ],
            [
                "id" => 16,
                "name" => "Bonsai song thụ Đào tiên",
                "image" => 'https://media.homecentre.com/i/homecentre/164042649-164042649-HC05042022_01-2100.jpg?fmt=auto&$quality-standard$&sm=c&$prodimg-m-sqr-pdp-2x$',
                "price" => 230000,
                "promotion_price" => 200000,
                "description" => "Bonsai Đào tiên có hoa màu hồng nhẹ và thường được trồng trong chậu đỏ. Đây là biểu tượng của sự tinh khiết và đẹp đẽ.",
                "supplier_id" => 7,
                "category_id" => 4
            ],
            [
                "id" => 17,
                "name" => "Bonsai song thụ quất",
                "image" => "https://media.mistralbonsai.com/tienda/11125-large_default/citrus-kumquat-bonsai-15-anos-kumquat-semi-cascada.jpg",
                "price" => 120000,
                "promotion_price" => 120000,
                "description" => "Bonsai Quất có lá nhỏ, thường được trang trí bằng các quả vàng tạo điểm nhấn. Nó mang đến sự may mắn và tài lộc theo quan điểm phong thủy",
                "supplier_id" => 8,
                "category_id" => 4
            ],
            [
                "id" => 18,
                "name" => "Bonsai đại lâm mộc Dáng",
                "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRu9mf9tA3E8x6Gpz4ntnq4Qrd5beNKzTpSOg&usqp=CAU",
                "price" => 180000,
                "promotion_price" => 120000,
                "description" => "Bonsai Dáng có đặc điểm thân cây rắn chắc và lá cây mảnh mai. Đây là loại cây thích hợp cho những người yêu thích sự cổ thụ và mạnh mẽ.",
                "supplier_id" => 8,
                "category_id" => 3
            ],
            [
                "id" => 19,
                "name" => "Bonsai đại lâm mộc Cam thảo",
                "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7Hcnd1JxojpRgRvOAh1DrbQk1-gPuuxV45BQAwirY8rowdcy0PvaCaWLBOyKIOgR3RmI&usqp=CAU",
                "price" => 100000,
                "promotion_price" => 100000,
                "description" => "Bonsai Cam Thảo thường có hình dáng độc đáo với thân cây và cành lá phong phú. Nó thường được trồng để tạo điểm nhấn và mang lại sự tươi tắn cho không gian",
                "supplier_id" => 8,
                "category_id" => 3
            ],
            [
                "id" => 20,
                "name" => "Bonsai đại lâm mộc Gã đỏ",
                "image" => "https://e.khoahoc.tv/photos/image/2016/04/17/bonsai-1.jpg",
                "price" => 150000,
                "promotion_price" => 150000,
                "description" => "Bonsai Gõ Đỏ có vẻ ngoại hình đẹp và lành mạnh, với thân cây có màu đỏ đặc trưng. Nó thường được chọn để trang trí nơi làm việc hoặc trong không gian sống.",
                "supplier_id" => 8,
                "category_id" => 3
            ],
            [
                "id" => 21,
                "name" => "Bonsai đại lâm mộc Sưa",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Black_Hills_Spruce_bonsai_forest_planting%2C_July_13%2C_2008.jpg/600px-Black_Hills_Spruce_bonsai_forest_planting%2C_July_13%2C_2008.jpg",
                "price" => 80000,
                "promotion_price" => 71000,
                "description" => "Bonsai Sưa thường có vẻ cổ thụ và được biết đến với đặc điểm lành mạnh và dễ chăm sóc. Lá cây nhỏ và gọn, tạo nên hình dáng ấn tượng cho cây Bonsai.",
                "supplier_id" => 9,
                "category_id" => 3
            ],
            [
                "id" => 22,
                "name" => "Bonsai đại lâm mộc Trúc",
                "image" => "https://wikithuysinh.vn/wp-content/uploads/2022/04/1-cay-canh-3-than.jpg",
                "price" => 100000,
                "promotion_price" => 100000,
                "description" => "Bonsai Trúc thường có hình dáng độc đáo với cành lá xanh mát và thân cây mảnh mai. Nó thường được trồng để tạo ra không gian nhỏ xinh và tinh tế.",
                "supplier_id" => 9,
                "category_id" => 3
            ],
            [
                "id" => 23,
                "name" => "Thế bonsai song thụ",
                "image" => "http://cayxanhhoabinh.com.vn/wp-content/uploads/2019/09/the-cay-bonsai-3.jpg",
                "price" => 500000,
                "promotion_price" => 450000,
                "description" => " Thế cây song thụ bonsai tượng trưng cho sự hòa hợp, yêu thương và đùm bọc tương trợ lẫn nhau. Thể hiện cho tình phụ tử, tình phu thê, tình bằng hữu",
                "supplier_id" => 9,
                "category_id" => 4
            ],
            [
                "id" => 24,
                "name" => "Dáng bonsai long chầu hổ phụng",
                "image" => "https://cayxanhtanthuy.com/wp-content/uploads/2023/04/cay-canh-bonsai-dang-long-ho-300x286.jpg",
                "price" => 100000,
                "promotion_price" => 80000,
                "description" => "Ý nghĩa của dáng long chầu hổ phụng là hình ảnh của hai con vật rồng và hổ. Đây là những con vật tâm linh, là biểu tượng cho quyền lực, sự uy nghi và bề thế trong quan niệm của người phương Đông.",
                "supplier_id" => 9,
                "category_id" => 5
            ],
            [
                "id" => 25,
                "name" => "Bonsai ngũ phúc-Thế thân đôi",
                "image" => "https://bonsaidep.vn/ckfinder/userfiles/images/41-the-bonsai-dep(30).jpg",
                "price" => 120000,
                "promotion_price" => 120000,
                "description" => "Phong cách thân cây đôi là phổ biến trong tự nhiên, ",
                "supplier_id" => 9,
                "category_id" => 6
            ],
            [
                "id" => 26,
                "name" => "Bonsai ngũ phúc-Thế rừng xanh",
                "image" => "https://bonsaidep.vn/ckfinder/userfiles/images/41-the-bonsai-dep(28).jpg",
                "price" => 200000,
                "promotion_price" => 200000,
                "description" => "Kiểu rừng trông rất giống kiểu nhiều thân cây, nhưng điểm khác biệt là nó bao gồm một số cây chứ không phải một cây có nhiều thân. Những cây phát triển nhất được trồng ở giữa một cái chậu lớn và nông.",
                "supplier_id" => 10,
                "category_id" => 6
            ],
            [
                "id" => 27,
                "name" => "cây dáng thế",
                "image" => "http://camnangcaytrong.com/Uploads/UserFiles/images/bonsai%20nhat%20ban%20dep.jpg",
                "price" => 3000000,
                "promotion_price" => 2490000,
                "description" => "cây cảnh nghệ thuật với sự tác động của con người tạo thành tác phẩm thể hiện ý nghĩa văn hoá phù hợp với thời đại",
                "supplier_id" => 10,
                "category_id" => 5
            ],
            [
                "id" => 28,
                "name" => "Cây Bonsai hoa giấy dáng huyền",
                "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7kVaTH4webKMAGQR3sI6vkOJrUfUUhC5KUn9JstMUh4jZblR_Du5I0PU-fbKrHBG-SWI&usqp=CAU",
                "price" => 2290000,
                "promotion_price" => 2290000,
                "description" => "Cây dáng huyền là cây có gốc trong chậu nhưng thân cây trườn qua mép chậu đổ xuống phía dưới như dòng thác đổ. Ngọn cây dài hơn đáy chậu và có xu hướng ngóc lên. Cây mọc vách đá α > 90 độ.",
                "supplier_id" => 10,
                "category_id" => 6
            ],
            [
                "id" => 29,
                "name" => "Cây du kiểu dáng Bonsai",
                "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7kVaTH4webKMAGQR3sI6vkOJrUfUUhC5KUn9JstMUh4jZblR_Du5I0PU-fbKrHBG-SWI&usqp=CAU",
                "price" => 2300000,
                "promotion_price" => 2000000,
                "description" => "Cây Du Kiểu Dáng Bonsai – Cây cảnh kiểu dáng Bonsai độc đáo dáng chuẩn\nCây Du có tên khoa học là Ulmaceae, thuộc một họ thực vật có hoa bao gồm các loài du và cử.\nLà loại cây thích khí hậu ấm áp ôn hòa, thích ánh sáng nhưng không thích nắng gắt, thích bóng râm,",
                "supplier_id" => 10,
                "category_id" => 5
            ],
            [
                "id" => 30,
                "name" => "Cây Bonsai dáng hoành",
                "image" => "https://shoponlinevungtau.com/wp-content/uploads/2021/08/Cay-Bonsai-dang-nghieng.jpg",
                "price" => 1999000,
                "promotion_price" => 1999000,
                "description" => "áng hoành là là dáng cây mà trục của thân cây nằm ngang so với mặt chậu.\nÝ nghĩa của cây cảnh dáng hoành: Dáng hoành ở ngoài tự nhiên thường là những cây có điều kiện sống khó khăn nhưng cây vẫn sống và nảy lộc đâm chồi (cây nằm ngang trên mặt đất α = 70 độ ≤ 90 độ).",
                "supplier_id" => 10,
                "category_id" => 6
            ],
            [
                "id" => 31,
                "name" => "Cây cảnh Bonsai đa lá đơn",
                "image" => "https://shoponlinevungtau.com/wp-content/uploads/2021/08/Cay-Bonsai-dang-dung-hinh-cay-du.jpg",
                "price" => 2990000,
                "promotion_price" => 2990000,
                "description" => "Cây này thuộc dạng gỗ lớn, thân cành có nhiều rễ khí sinh. Vỏ màu nâu xám, có nhựa mủ, cành cây dài. Lá thuộc loại lá đơn mọc cánh, màu xanh ngọc bích, gốc tù tròn và dày bóng.",
                "supplier_id" => 10,
                "category_id" => 6
            ]
        ]);
    }
}
