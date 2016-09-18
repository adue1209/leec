<?php

if (!defined('RAPIDLEECH')) {
    require('../deny.php');
    exit;
}
// The English language file
// You should always use this file as a template for translating

$lang[1] = 'Giới hạn quyền đang nhập';
$lang[2] = 'Máy chủ từ chôi yêu cầu';
$lang[3] = 'Bạn đã \'nhập 1 địa chỉ email không hợp lệ';
$lang[4] = 'Kích thước tệp tin phải là số';
$lang[5] = 'Không rõ kiểu URL, <span class="font-black">Only Use <span class="font-blue">http</span> or <span class="font-blue">https</span> or <span class="font-blue">ftp</span> Protocol</span>';
$lang[6] = 'Không xác định được định dạng để lưu file này';
$lang[7] = 'Không thể tranload từ <span class="font-black">%1$s (%2$s)</span>'; // %1$s = host name %2$s = host ip
$lang[8] = 'Đổi hướng đến:';
$lang[9] = 'Chưa \'cập nhập được danh sách tệp tin';
$lang[10] = 'File <b>%1$s</b> (<b>%2$s</b>) Đã lưu!<br />Thời gian: <b>%3$s</b><br />Tốc độ: <b>%4$s KB/s</b><br />'; // %1$s = filename %2$s = filesize %3$s = time of download %4$s = speed
$lang[11] = '<script>mail("Đã gửi file đến <b>%1$s</b>.", "%2$s");</script>'; // %1$s = E-mail address %2$s = filename
$lang[12] = 'Gửi file lỗi!';
$lang[13] = 'Quay lại';
$lang[14] = 'Kết nối thất bại file đã bị xóa';
$lang[15] = 'Tải lại';
$lang[16] = 'Hãy thay đổi chế độ Debug <b>1</b>';
$lang[17] = 'Tối đa (%1$s) liên kết.'; // %1$s = Number of maximum links
$lang[18] = '%1$s Link%2$s checked in %3$s seconds. (Method: <b>%4$s</b>)'; // %1$s = Number of links %2$s = Plural form %3$s = seconds %4$s = method for checking links
$lang[19] = 's'; // End of a plural
$lang[20] = 'Kết nối máy chủ Proxy thất bại';
$lang[21] = 'Đường dẫn';
$lang[22] = 'Trạng thái';
$lang[23] = 'Đang chờ';
$lang[24] = 'URL không hợp lệ';
$lang[25] = 'Chuẩn bị';
$lang[26] = 'Bắt đầu';
$lang[27] = 'Kết nối thất bại';
$lang[28] = 'Đã hoàn thành';
$lang[29] = 'Bắt đầu tự động Transload';
$lang[30] = 'Trình duyệt không hỗ trợ vui lòng cập nhật trình duyệt';
$lang[31] = 'Thêm liên kết';
$lang[32] = 'Các liên kết';
$lang[33] = 'Tùy chọn';
$lang[34] = 'Tải tệp tin về máy chủ';
$lang[35] = 'Sử dụng cài đặt Proxy';
$lang[36] = 'Proxy';
$lang[37] = 'Tên tài khoản';
$lang[38] = 'Mật khẩu';
$lang[39] = 'Sử dụng Acc Imageshack ';
$lang[40] = 'Lưu tơi';
$lang[41] = 'Định dạng';
$lang[42] = 'Sử dụng Acc Premium';
$lang[43] = 'Run Server Side';
$lang[44] = 'Thời gian trễ';
$lang[45] = 'Độ trễ (giây)';
$lang[46] = 'Không có File hoặc host được chọn để tải lên';
$lang[47] = 'Chọn host để tải lên';
$lang[48] = 'Không hỗ trợ dịch vụ Upload!';
$lang[49] = 'Cửa sổ tải lên';
$lang[50] = 'Định dạng link lưu trữ';
$lang[51] = 'Mặc định';
$lang[52] = 'Chọn thất';
$lang[53] = 'Bỏ chọn tất';
$lang[54] = 'Invert Selection';
$lang[55] = 'Tên';
$lang[56] = 'Kích cỡ';
$lang[57] = 'Không thấy file';
$lang[58] = 'Legend for link saving format: (case sensitive)';
$lang[59] = 'Các liên kết tải về';
$lang[60] = 'Tên của File';
$lang[61] = 'Kiểu liên kết mặc định';
$lang[62] = 'Anything besides the ones stated above will be treated as string, you are unable to do multi line format now, a new line will be inserted for each link.';
$lang[63] = 'Đang tải lên %1$s tới %2$s'; // %1$s = filename %2$s = file host name
$lang[64] = 'File %1$s không tồn tại.'; // %1$s = filename
$lang[65] = 'File %1$s is không hỗ trợ script.'; // %1$s = filename
$lang[66] = 'Files vượt quá dung lượng tải lên.';
$lang[67] = 'Không hỗ trợ tải lên';
$lang[68] = 'Download-Link';
$lang[69] = 'Delete-Link';
$lang[70] = 'Stat-Link';
$lang[71] = 'Admin-Link';
$lang[72] = 'USER-ID';
$lang[73] = 'FTP upload';
$lang[74] = 'Password';
$lang[75] = 'Rapidleed - Upload Links';
$lang[76] = '<div class="linktitle">Upload Links for <strong>%1$s</strong> - <span class="bluefont">Size: <strong>%2$s</strong></span></div>'; // %1$s = file name %2$s = file size
$lang[77] = 'Xong';
$lang[78] = 'Quay lại';
$lang[79] = 'Không kết nối được\'với máy chủ %1$s.'; // %1$s = FTP server name
$lang[80] = 'Lỗi, Tài khoản hoặc mật khẩu không đúng.';
$lang[81] = 'Đã kết nối tới: <b>%1$s</b>...'; // %1$s = FTP server name
$lang[82] = 'Định dạng file %1$s không tải được'; // %1$s = File type
$lang[83] = 'File <b>%1$s</b>, kích thước <b>%2$s</b>...'; // %1$s = file name %2$s = file size
$lang[84] = 'Lỗi truy xuất liên kết';
$lang[85] = 'Kí tự thông qua như chuỗi';
$lang[86] = 'Lỗi, hãy kích hoạt JavaScript.';
$lang[87] = 'Xin chờ <b>%1$s</b> giây'; // %1$s = number of seconds
$lang[88] = 'Không thể\'kết nối tới %1$s với cổng %2$s'; // %1$s = host name %2$s = port
$lang[89] = 'Kết nối tới proxy: <b>%1$s</b> với cổng <b>%2$s</b>...'; // %1$s = Proxy host %2$s = Proxy port
$lang[90] = 'Đã kết nối tới: <b>%1$s</b> với cổng <b>%2$s</b>...'; // %1$s = host %2$s = port
$lang[91] = 'Không nhận được tiêu đề';
$lang[92] = 'Trang bị chặn quyên truy cập!';
$lang[93] = 'Không tìm thấy trang!';
$lang[94] = 'Trang đã bị chặn hoặc không tìm thấy!';
$lang[95] = 'Lỗi, nó dược chuyển tới [%1$s]'; // %1$s = redirected address
$lang[96] = 'Trang này yêu cầu truy cập ủy quyền. Đòi ổi phải có mật khẩu và tài khoản để đăng nhập url:<br />http://<b>login:password@</b>www.site.com/file.exe';
$lang[97] = 'Giới hạn tải lại';
$lang[98] = 'Máy chủ này không\'hỗ trợ tải lại';
$lang[99] = 'Tải xuống';
$lang[100] = 'Tài khoản Pre này đang được sử dụng bởi 1 ip khác.';
$lang[101] = 'File %1$s không thể lưu vào trong thư mục %2$s'; // %1$s = file name %2$s = directory name
$lang[102] = 'Thử lại và chmod thư mục thành 777.';
$lang[103] = 'Thử lại';
$lang[104] = 'File';
$lang[105] = 'Không thể thực hiện 1 bản ghi vào trong file %1$s'; // %1$s = file name
$lang[106] = 'URL không hợp lệ hoặc đã xảy ra lỗi';
$lang[107] = 'Bạn đã đạt đến giớ hạn cho người dùng miễn phí.';
$lang[108] = 'Phiên tải xuống đã hết hạn';
$lang[109] = 'Mã truy cập sai.';
$lang[110] = 'Bạn đã nhập sai mã truy cập quá nhiều lần';
$lang[111] = 'Vượt quá giới hạn tải xuống';
$lang[112] = 'Lỗi đọc dữ liệu';
$lang[113] = 'Lỗi gửi dữ liệu';
$lang[114] = 'Hoạt động';
$lang[115] = 'Không có sẵn';
$lang[116] = 'Không tồn tại';
$lang[117] = 'Bạn cần phải tải về hoặc kích hoạt cURL extension (http://www.php.net/cURL) hoặc thiết lập trong \'fgc\' => 1 in config.php.';
$lang[118] = 'cURL đã kích hoạt';
$lang[119] = 'Khuyến khích sử dụng trên php v 5 trở lên';
$lang[120] = 'Kiểm tra chế độ an toàn của bạn đã tắt, không làm việc';
$lang[121] = 'Đang gửi file <b>%1$s</b>'; // %1$s = filename
$lang[122] = 'Không dùng spliting, Chỉ gửi mail';
$lang[123] = 'Spliting into %1$s part size'; // %1$s = part size
$lang[124] = 'Phương pháp';
$lang[125] = 'Gửi 1 phần <b>%1$s</b>'; //%1$s = part number
$lang[126] = 'Không dùng spliting, Chỉ gửi mail';
$lang[127] = 'Không thấy file hosts';
$lang[128] = 'Không thể tạo tệp tin host';
$lang[129] = 'giờ'; // Plural
$lang[130] = 'giờ';
$lang[131] = 'phút'; // Plural
$lang[132] = 'phút';
$lang[133] = 'giây'; // Plural
$lang[134] = 'giây';
$lang[135] = 'getCpuUsage(): couldn\'t access STAT path or STAT file invalid';
$lang[136] = 'Trạng thái CPU';
$lang[137] = 'Phát sinh lỗi';
$lang[138] = 'Chọn  ít nhất 1 file.';
$lang[139] = 'Emails';
$lang[140] = 'Gửi';
$lang[141] = 'Xóa thư gửi thành công';
$lang[142] = 'Chia theo các phần';
$lang[143] = 'Kích thước từng phần';
$lang[144] = '<b>%1$s</b> - E-mail không hợp lệ.'; // %1$s = email address
$lang[145] = 'File <b>%1$s</b> không tìm thấy!'; // %1$s = filename
$lang[146] = 'Chưa cập nhật\'danh sách file!';
$lang[147] = 'Xóa file đã bị vô hiệu';
$lang[148] = 'Xóa files';
$lang[149] = 'Có';
$lang[150] = 'Không';
$lang[151] = 'File <b>%1$s</b> đã xóa'; // %1$s = filename
$lang[152] = 'Xóa các tệp tin bị lỗi <b>%1$s</b>!'; // %1$s = filename
$lang[153] = 'Host';
$lang[154] = 'Port';
$lang[155] = 'Thư mục';
$lang[156] = 'Xóa file gốc sau khi tải lên thành công';
$lang[157] = 'Lưu dữ liệu FTP';
$lang[158] = 'Xóa dữ liệu FTP';
$lang[159] = 'Không xác định vị trí thư mục <b>%1$s</b>'; // %1$s = directory name
$lang[160] = 'File %1$s tải lên thành công!'; // %1$s = filename
$lang[161] = 'Thời gian';
$lang[162] = 'Tốc độ';
$lang[163] = 'Không thể tải lên\'tệp tin <b>%1$s</b>!'; // %1$s = filename
$lang[164] = 'Email';
$lang[165] = 'Xóa thư đã gửi';
$lang[166] = 'E-mail không hợp lệ';
$lang[167] = 'Hãy chỉ chọn .crc hoặc .001 file!';
$lang[168] = 'Hãy chọn .crc file!';
$lang[169] = 'Hãy chỉ chọn .crc hoặc .001 file!';
$lang[170] = 'Kiểm tra CRC32? (nên chọn)';
$lang[171] = 'Chế độ kiểm tra CRC32';
$lang[172] = 'Sử dụng hash_file (nên chọn)';
$lang[173] = 'Đọc file vào bộ nhớ';
$lang[174] = 'Làm giả crc';
$lang[175] = 'Xóa file gốc sau khi đóng gói thành công';
$lang[176] = 'Thông báo';
$lang[177] = 'File crc32 won\' đã kiểm tra';
$lang[178] = 'Không thể\'t đọc .crc file!';
$lang[179] = 'Lỗi, gteepj tin đầu ra đã tồn tại <b>%1$s</b>'; // %1$s = filename
$lang[180] = 'Lỗi, phân tích các bộ phận không đầy đủ';
$lang[181] = 'Lỗi, Kiểu file này %1$s bị cấm'; // Filetype
$lang[182] = 'Không thể mở tệp tin này <b>%1$s</b>'; // %1$s = filename
$lang[183] = 'Lỗi viết File <b>%1$s</b>!'; // %1$s = filename
$lang[184] = 'CRC32 kiểm tra không\'trùng khớp!';
$lang[185] = 'File <b>%1$s</b> sáp nhập thành công'; // %1$s = filename
$lang[186] = 'đã xóa';
$lang[187] = 'chưa được xóa';
$lang[188] = 'Thêm phần mở rộng';
$lang[189] = 'không có';
$lang[190] = 'tới';
$lang[191] = 'Đổi Tên?';
$lang[192] = 'Hủy';
$lang[193] = 'Lỗi đổi tên file <b>%1$s</b>'; // %1$s = filename
$lang[194] = 'File <b>%1$s</b> đã đổi tên thành <b>%2$s</b>'; // %1$s = original filename %2$s = renamed filename
$lang[195] = 'Tên file nén';
$lang[196] = 'Hãy nhập tên cho file nén!';
$lang[197] = 'Lỗi khi tạo file nén.';
$lang[198] = 'File %1$s đã nén'; // %1$s = filename
$lang[199] = 'Tệp nén đã đóng gói <b>%1$s</b>'; // %1$s = filename
$lang[200] = 'Lỗi tệp nén không có gì.';
$lang[201] = 'Tên mới';
$lang[202] = 'Couldn\'t thể đổi tên file <b>%1$s</b>!'; // %1$s = filename
$lang[203] = 'Xóa file gốc sau khi chia nhỏ thành công';
$lang[204] = 'Files và các thư mục';
$lang[205] = 'Unzip';
$lang[206] = 'Chọn định dạng video YouTube';
$lang[207] = 'Link File';
$lang[208] = 'Giới thiệu';
$lang[209] = 'Bắt đầu';
$lang[210] = 'User &amp; Pass (HTTP/FTP)';
$lang[211] = 'Tài khoản';
$lang[212] = 'Mật khẩu';
$lang[213] = 'Thêm bình luận';
$lang[214] = 'Tùy chọn Plugin';
$lang[215] = 'Vô hiệu Plugins';
$lang[216] = 'Chọn định dạng Video';
$lang[217] = 'Link chuyển tiếp';
$lang[218] = '&amp;fmt=';
$lang[219] = 'Tự động lấy chất lượng video cao nhất';
$lang[220] = '17 [Video: 3GP 176x144 | Audio: AAC 2ch 44.10kHz]';
$lang[221] = '5 [Video: FLV 400x240 | Audio: MP3 1ch 22.05kHz]';
$lang[222] = '34 [Video: FLV 640x360 | Audio: AAC 2ch 44.10kHz]';
$lang[223] = '35 [Video: FLV 854x480 | Audio: AAC 2ch 44.10kHz]';
$lang[224] = '43 [Video: WebM 640x360 | Audio: Vorbis 2ch 44.10kHz]';
$lang[225] = '45 [Video: WebM 1280x720 | Audio: Vorbis 2ch 44.10kHz]';
$lang[226] = '18 [Video: MP4 480x360 | Audio: AAC 2ch 44.10kHz]';
$lang[227] = '22 [Video: MP4 1280x720 | Audio: AAC 2ch 44.10kHz]';
$lang[228] = '37 [Video: MP4 1920x1080 | Audio: AAC 2ch 44.10kHz]';
$lang[229] = 'ImageShack&reg; TorrentService';
$lang[230] = 'Tên tài khoản';
$lang[231] = 'Mật khẩu';
$lang[232] = 'Giá trị Cookie Megaupload.com';
$lang[233] = 'user';
$lang[234] = 'Use vBulletin Plugin';
$lang[235] = 'Additional Cookie Value';
$lang[236] = 'Key=Value';
$lang[237] = 'Gửi file tới Email';
$lang[238] = 'Email';
$lang[239] = 'Chia nhỏ Files';
$lang[240] = 'Phương pháp';
$lang[241] = 'Total Commander';
$lang[242] = 'RFC 2046';
$lang[243] = 'Parts Size';
$lang[244] = 'MB';
$lang[245] = 'Sử dụng cài đặt Proxy';
$lang[246] = 'Proxy';
$lang[247] = 'Tên tài khoản';
$lang[248] = 'Mật khẩu';
$lang[249] = 'Dùng tài khoản Premium';
$lang[250] = 'Tên tài khoản';
$lang[251] = 'Mật khẩu';
$lang[252] = 'Lưu tới';
$lang[253] = 'Path';
$lang[254] = 'Lưu các cài đặt';
$lang[255] = 'Khôi phục cài đặt';
$lang[256] = 'Chọn hết';
$lang[257] = 'Bỏ chọn';
$lang[258] = 'Invert Selection';
$lang[259] = 'Hiển thị';
$lang[260] = 'Đã tải xong';
$lang[261] = 'Tất cả File';
$lang[262] = 'Tên';
$lang[263] = 'Kích cỡ';
$lang[264] = 'Nhận xét';
$lang[265] = 'Ngày';
$lang[266] = 'Không thấy file';
$lang[267] = 'Works With';
$lang[268] = 'Loại bỏ';
$lang[269] = 'Chế độ gỡ lỗi';
$lang[270] = 'Chỉ hiện thị Links';
$lang[271] = 'Chỉ Links loại bỏ';
$lang[272] = 'Kiểm tra links';
$lang[273] = 'Đang tải...';
$lang[274] = 'Đang xử lý, xin chờ...';
$lang[275] = 'Máy chủ';
$lang[276] = 'Đã dùng';
$lang[277] = 'Trống';
$lang[278] = 'Tổng';
$lang[279] = 'CPU';
$lang[280] = 'Thời gian';
$lang[281] = 'Thời gian vị trí';
$lang[282] = 'Tự động xóa';
$lang[283] = 'Tiếng sau khi tải về';
$lang[284] = 'Phút sau khi tải về';
$lang[285] = 'Hành động';
$lang[286] = 'Tải lên';
$lang[287] = 'FTP File';
$lang[288] = 'E-Mail';
$lang[289] = '(Mass) E-mail';
$lang[290] = 'Chia nhỏ Files';
$lang[291] = 'Hợp thành Files';
$lang[292] = 'MD5 Hash';
$lang[293] = 'Pack Files';
$lang[294] = 'ZIP Files';
$lang[295] = 'Unzip Files';
$lang[296] = 'Đổi tên';
$lang[297] = 'Đổi tên (Mass)';
$lang[298] = 'Xóa';
$lang[299] = 'Danh sách Links';
$lang[300] = 'Đến trang tải xuống';
$lang[301] = 'Đồng ý';
$lang[302] = 'ở đây';
$lang[303] = 'Tải file xuống';
$lang[304] = 'configs/files.lst không cho phép ghi, hãy chắc chắn chmod nó là 777';
$lang[305] = '&nbsp;is đường dẫn bạn tải về nó không cho phép ghi. hãy chắc chắn chmod nó là 777';
$lang[306] = 'Đang sát nhập file';
$lang[307] = 'Xin chờ';
$lang[308] = 'Đã xong';
$lang[309] = 'Thất bại';
$lang[310] = 'Bạn có thể nhìn thấy cảnh báo không, cái mẹo gì ý...';
$lang[311] = 'Bạn có thể chưa bật các biến trên Server Info';
$lang[312] = 'Máy chủ không hỗ trợ tệp trên 2 GB';
$lang[313] = 'Kiểm tra Script';
$lang[314] = 'fsockopen';
$lang[315] = 'memory_limit';
$lang[316] = 'safe_mode';
$lang[317] = 'cURL';
$lang[318] = 'allow_url_fopen';
$lang[319] = 'Phiên bản PHP - ';
$lang[320] = 'allow_call_time_pass_reference';
$lang[321] = 'passthru';
$lang[322] = 'Disk Space Functions';
$lang[323] = 'Phiên bản Apache - ';
$lang[324] = 'Sai Proxy';
$lang[325] = 'File lưu thành công!';
$lang[326] = 'Lưu ghi chú';
$lang[327] = 'Ghi chú';
$lang[328] = 'Vô hiệu hành động';
$lang[329] = 'Cửa sổ chính';
$lang[330] = 'Cài đặt';
$lang[331] = 'Files máy chủ';
$lang[332] = 'Kiểm tra đường link';
$lang[333] = 'Tùy biến';
$lang[334] = 'Tự động tải file';
$lang[335] = 'Tự động tải lên';
$lang[336] = 'Kích thước File đã bị giới hạn ';
$lang[337] = 'Kích thước giới hạn: ';
$lang[338] = 'Rar Files';
$lang[339] = 'Unrar Files';
$lang[340] = 'Đã phát hiện lỗi';
$lang[341] = 'chọn để mở rộng';
$lang[342] = 'Bạn không thể kéo cửa sổ từ đây';
$lang[343] = 'Không tìm thấy "rar"<br />bạn cần tải và giải nén "rar" tới "/rar/" directory';
$lang[344] = 'Các tệp được nén:';
$lang[345] = 'Tên tệp nén:';
$lang[346] = 'Tùy chọn:';
$lang[347] = 'Mức độ nén:';
$lang[348] = 'Cửa hàng';
$lang[349] = 'Cực nhanh';
$lang[350] = 'Nhanh';
$lang[351] = 'Bình thường';
$lang[352] = 'Tốt';
$lang[353] = 'Cực tốt';
$lang[354] = 'Thiết lập mức độ';
$lang[355] = 'Xóa file sau khi nén xong';
$lang[356] = 'Tạo solid nén';
$lang[357] = 'Tạo điểm khôi phục';
$lang[358] = 'Kiểm tra file nén sai khi nén';
$lang[359] = 'Sử dụng mật khẩu';
$lang[360] = 'Mã hóa tên file';
$lang[361] = 'Tạo kho nén';
$lang[362] = 'Rar';
$lang[363] = 'đang tạo file nén: <b>%1$s</b>';
$lang[364] = 'Xin chờ...';
$lang[365] = 'Quay lại danh sách';
$lang[366] = '<b>Files từ %1$s</b>:';
$lang[367] = 'Không thể tìm "unrar"';
$lang[368] = 'Pasword hiển thị file:';
$lang[369] = 'Pasword giải nén files:';
$lang[370] = 'Lỗi:%1$s';
$lang[371] = 'Thử lại danh sách';
$lang[372] = 'Đã chọn Unrar';
$lang[373] = '<b>Giải nén file tới %1$s</b>:';
$lang[374] = 'Trạng thái:';
$lang[375] = 'Chọn kí tự';
$lang[376] = 'Premium Accounts :';
$lang[377] = '38 [Video: MP4 4096x3072 | Audio: AAC 2ch 44.10kHz]';
$lang[378] = 'Đóng cửa sổ';
$lang[379] = 'Files';
$lang[380] = 'Thay đổi MD5 nên chỉ được áp dụng cho các định dạng làm việc được biết đến(i.e. .rar hoặc .zip)<br />bạn có muốn tiếp tục?';
$lang[381] = 'MD5 của <b>%1$s</b> thay đổi'; // %1$s = filename
$lang[382] = 'Lỗi thay đổi md5 của file<b>%1$s</b>!'; // %1$s = filename
$lang[383] = 'Thay đổi MD5';
$lang[384] = 'Kí tự trùng khớp';
$lang[385] = 'Trùng khớp';
$lang[386] = 'Bỏ qua trường hợp';
$lang[387] = 'Đặt mỗi tập tin vào một kho lưu trữ riêng biệt';
$lang[388] = 'OpenSSL';
$lang[389] = '44 [Video: WebM 854x480 | Audio: Vorbis 2ch 44.10kHz]';
$lang[390] = 'CRC32 Hash';
$lang[391] = 'CRC32 found in file\'s name không khả dụng';
$lang[392] = 'CRC32 found in file\'s name (&quot;%1$s&quot;) doesn\'t match calculated CRC32';
$lang[393] = 'SHA1 Hash';
?>
