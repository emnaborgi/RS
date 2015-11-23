.ossn-chat-base {
    border-bottom: 0;
    bottom: 0px;
    left: 15px;
    display: block;
    font-family: "Lucida Grande",Verdana,Arial,"Bitstream Vera Sans",sans-serif;
    font-size: 11px;
    height: 33px;
    position: fixed;
    text-align: left;
    z-index: 1028;
    margin-top: 8px;
    left: 15%;
    color: #000;
    width: 850px;
}

.ossn-chat-base .ossn-chat-bar {
    display: block;
    bottom: 0px;
    cursor: pointer;
    width: 200px;
    float: right;
}

.ossn-chat-base .ossn-chat-bar .inner {
    padding: 10px;
    margin-left: 5px;
    background: #EBEEF4;
    -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.5);
    border: 1px solid #BAC0CD;
    height: 29px;
    border-radius-top-right: 4px;
    border-radius-top-left: 4px;
}

.ossn-chat-base .ossn-chat-bar .inner:hover {
    background: #fff;
}

.ossn-chat-base .ossn-chat-bar .friends-list {
    background: #F2F3F5;
    width: 193px;
    min-height: 268px;
    margin-top: -268px;
    margin-left: 5px;
    position: fixed;
    height: 268px;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
    border-left: 1px solid #ccc;
    border-right: 1px solid #ccc;
    display: none;
}

.ossn-chat-inner-text {
    width: 160px;
    margin-left: 20px;
    font-weight: bold;
}

.ossn-chat-tab-titles {
    background: #41667B;
    background: linear-gradient(#41667B, #3A5A6D);
    padding: 5px;
    border: 1px solid #3A5A6D;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
}

.ossn-chat-inline-table {
    display: inline-table;
}

.ossn-chat-tab-titles .options {
    float: right;
    margin-right: 10px;
    color: #FFF;
    margin-top: 2px;
    font-size: 12px;
    cursor: pointer;
}

.ossn-chat-tab-titles .options .item:hover {
    background: #5E72A2;
    width: 17px;
    margin-right: -4px;
    text-align: center;
}

.ossn-chat-tab-titles:hover {
    background: #41667B;
}

.ossn-chat-tab-titles .text {
    color: #FFF;
    font-weight: bold;
    margin-left: 9px;
    padding: 2px;
}

.ossn-chat-bar .friends-list .data {
    width: 193px;
    overflow: hidden;
    overflow-y: scroll;
    height: 239px;
}

.ossn-chat-base .ossn-chat-bar .friends-list-item:hover {
    background: #eee;
}

.ossn-chat-base .ossn-chat-bar .friends-list-item .friends-item-inner {
    margin: 5px 5px 5px 5px;
    height: 36px;
    padding: 2px;
}

.ossn-chat-base .ossn-chat-bar .friends-list-item .icon {
    display: inline-table;
    width: 32px;
    height: 32px;
    border: 1px solid #ccc;
}

.ossn-chat-base .ossn-chat-bar .friends-list-item .name {
    margin-top: -25px;
    margin-left: 40px;
}

.ossn-chat-base .ossn-chat-bar .friends-list-item .ossn-chat-icon-online {
    float: right;
    margin-right: 4px;
    margin-top: -17px;
}

.ossn-chat-none {
    padding: 5px;
}

.friend-tab-item {
    display: block;
    bottom: 0px;
    cursor: pointer;
    width: 200px;
    float: right;
}

.friend-tab-item .friend-tab {
    padding: 10px;
    margin-left: 5px;
    background: #EBEEF4;
    -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.5);
    border: 1px solid #BAC0CD;
    height: 29px;
    border-radius: 3px;
}

.ossn-chat-tab-active {
    background: #5D7D91 !important;
    border: 1px solid #2F4959 !important;
    color: #fff;
}

.friend-tab-item .tab-container {
    margin-top: -265px;
    position: absolute;
    height: 265px;
    width: 251px;
    margin-left: 5px;
    display: none;
}

.friend-tab-item .tab-container .data {
    background: #eee;
    border-left: 1px solid #ccc;
    border-right: 1px solid #ccc;
    width: 249px;
    height: 236px;
    overflow: hidden;
    overflow-y: scroll;
}

.friend-tab-item .data .message-reciever .text,
.friend-tab-item .data .message-sender .text {
    position: relative;
    margin-top: 5px;
    margin-bottom: 5px;
    max-width: 80%;
    clear: both;
}

.friend-tab-item .data .message-reciever .text {
    margin-right: auto;
    background-image: -webkit-linear-gradient(bottom, #F2F2F2, #FFF);
    border-radius: 3px;
    border: 1px solid #ccc;
    text-shadow: rgba(255, 255, 255, .5) 0 1px 0;
    color: #000;
    display: inline-table;
}

.friend-tab-item .data .message-reciever .text .inner {
    padding: 5px;
    line-height: 15px;
}

.friend-tab-item .data .message-sender {
    width: 210px;
    float: right;
}

.friend-tab-item .data .message-reciever {
    width: 222px;
    float: left;
}

.friend-tab-item .data .message-reciever .user-icon {
    display: inline-table;
    padding: 3px;
}

.friend-tab-item .data .message-sender .text {
    margin-left: 35px;
    background: linear-gradient(#C7DEFE, #E7F1FE);
    background-image: -webkit-gradient(linear, center bottom, center top, from(#C7DEFE), to(#E7F1FE));
    background-image: -webkit-linear-gradient(bottom, #C7DEFE, #E7F1FE);
    border: 1px solid #DFDFDF;
    border: 1px solid rgba(0, 0, 0, 0.18);
    border-bottom-color: rgba(0, 0, 0, 0.29);
    -webkit-border-radius: 4px;
    -webkit-box-shadow: 0 1px 0 #DCE0E6;
    display: inline-table;
}

.friend-tab-item .data .message-sender .text .inner {
    padding: 5px;
    line-height: 15px;
    max-width: 158px;
    word-wrap: break-word;
}

.ossn-chat-triangle {
    border-top: 5px solid rgba(0, 0, 0, 0);
    border-bottom: 5px solid rgba(0, 0, 0, 0);
}

.ossn-chat-triangle-blue {
    border-left: 5px solid #AFD0FE;
    margin-top: 10px;
    float: right;
}

.ossn-chat-triangle-white {
    border-right: 5px solid #B8B8B8;
    margin-top: 10px;
    margin-left: 38px;
    float: left;
}

.ossn-chat-text-data {
    margin-top: -40px;
}

.ossn-chat-text-data-right {
    float: right;
}

.friend-tab-item .friend-tab form {
    display: none;
}

.friend-tab-item .friend-tab input[type='text'] {
    width: 218px;
    height: 30px;
    padding: 2px;
    margin-top: -9px;
    margin-left: -9px;
    position: absolute;
    font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
    font-size: 12px;
}

.ossn-chat-tab-close {
    width: 17px;
    margin-right: -4px;
    text-align: center;
}

.ossn-chat-new-message {
    background-color: #dc0d17;
    background-image: -webkit-gradient(linear, center top, center bottom, from(#fa3c45), to(#dc0d17));
    background-image: -webkit-linear-gradient(#fa3c45, #dc0d17);
    color: #fff;
    min-height: 13px;
    padding: 1px 3px;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, .4);
    font-size: 10px;
    float: left;
    display: none;
}

.ossn-chat-icon-smilies {
    background: #FFF;
    width: 221px;
    min-height: 40px;
    padding: 5px;
    position: fixed;
    border: 1px solid #CCC;
    z-index: 1;
}

.ossn-chat-item-smiles {
    padding: 3px;
}

.ossn-chat-icon-smile-set {
    margin-top: -10px;
    background: #fff;
    width: 29px;
    padding: 4px;
    height: 27px;
    position: absolute;
    margin-left: 201px;
}

.ossn-chat-icon-smilies {
    display: none;
}
/** Icons **/
.ossn-chat-icon {
    background: url("<?php echo ossn_site_url(); ?>components/OssnChat/images/useronline.png") no-repeat;
    width16px;
height: 14px;
}

.ossn-chat-icon-online {
    background: url("<?php echo ossn_site_url(); ?>components/OssnChat/images/online.png") no-repeat;
    width: 10px;
    height: 14px;
}

.ossn-chat-icon-offline {
    background: url("<?php echo ossn_site_url(); ?>components/OssnChat/images/offline.png") no-repeat;
    width: 10px;
    height: 14px;
}

.ossn-chat-icon-expend {
    background: url("<?php echo ossn_site_url(); ?>components/OssnChat/images/popup.png") no-repeat;
    width: 10px;
    height: 11px;
    margin-right: 8px;
}

.ossn-chat-icon-expend:hover {
    opacity: 0.9;
}

.ossn-chat-icon-smile {
    background: url("<?php echo ossn_site_url(); ?>components/OssnChat/images/smile.png") no-repeat;
    width: 14px;
    height: 14px;
    margin-left: 10px;
}

.ossn-chat-icon {
    width: 16px !important;
    height: 16px !important;
}

.ossn-chat-windows-long {
    display: none;
}

@media only screen
and (min-width : 1280px) {
    .ossn-chat-base {
        width: 910px !important;
    }
}

@media only screen
and (min-width : 1360px) {
    .ossn-chat-bar {
        display: none !important;
    }

    .ossn-chat-windows-long {
        float: right;
        position: fixed;
        min-height: 500px;
        width: 175px;
        border-left: 1px solid #ccc;
        bottom: 0px;
        right: 0;
        top: 0;
        background: #E9EAED;
        display: block;
    }

    .ossn-chat-windows-long .inner {
        margin-top: 45px;
        border-top: 1px solid #ccc;
        overflow: hidden;
        overflow: auto;
        height: 600px;
    }

    .ossn-chat-windows-long .friends-list-item .friends-item-inner {
        margin: 5px 5px 5px 5px;
        height: 32px;
    }

    .ossn-chat-windows-long .friends-list-item {
        border-top: 1px solid #E9EAED;
        border-bottom: 1px solid #E9EAED;
    }

    .ossn-chat-windows-long .friends-list-item:hover {
        background: #E1E2E5;
        border-top: 1px solid #ddd;
        border-bottom: 1px solid #ddd;
        cursor: pointer;
    }

    .ossn-chat-windows-long .friends-list-item .icon {
        display: inline-block;
        width: 32px;
        height: 32px;
        border: 1px solid #ccc;
    }

    .ossn-chat-windows-long .friends-list-item .name {
        margin-top: -25px;
        margin-left: 40px;
    }

    .ossn-chat-windows-long .friends-list-item .ossn-chat-icon-online {
        float: right;
        margin-right: 4px;
        margin-top: -17px;
    };
}
/** Document **/
#ossn-chat-sound {
    display: none;
}

.ossn-chat-message-sending {
    position: absolute;
    width: 218px;
    height: 11px;
    margin-top: -9px;
    margin-left: -9px;
    padding: 10px;
    background: #fff;
    display: none;
}

.ossn-chat-sending-icon {
    background: url("<?php echo ossn_site_url();?>components/OssnChat/images/loading-small.gif") no-repeat;
    width: 16px;
    height: 11px;
}
