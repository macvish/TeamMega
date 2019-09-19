import React from "react";
import { FaTwitter, FaFacebook } from 'react-icons/fa';
import { FaInstagram, FaYoutube, FaMediumM } from 'react-icons/fa';

function Follow() {
    return(
        <div>
            <span><u>FOLLOW US</u></span><br/>
            <div className="icons">
                <a href="./#"><FaTwitter className="fa-icons" /></a>
                <a href="./#"><FaFacebook className="fa-icons" /></a>
                <a href="./#"><FaInstagram className="fa-icons" /></a>
                <a href="./#"><FaYoutube className="fa-icons" /></a>
                <a href="./#"><FaMediumM className="fa-icons" /></a>
            </div>
        </div>
    )
}
export default Follow