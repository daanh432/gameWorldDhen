<div id="backgroundImageDhen"></div>
<header>
    <a id="logoDhen" href="index.php">Game World</a>
    <nav id="navigationDhen">
        <ul>
            <li><a class="navigationHrefDhen" href="index.php">Home</a></li>
            <li id="menuGamesDropdownDhen">
                <a class="navigationHrefDhen" href="games.php">Games</a>
                <div id="menuGamesDropdownContentDhen">
                    <?php
                    include_once("./php/mysql.php");

                    $sql = "SELECT categoryId,categoryName from categorys";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "<a class='menuGamesItemDropdownDhen' href='games.php?categoryId=" . $row["categoryId"] . "'>" . $row["categoryName"] . "</a>";
                        }
                    }
                    ?>
                </div>
            </li>
            <li><a class="navigationHrefDhen" href="aboutus.php">About Us</a></li>
            <li><a class="navigationHrefDhen" href="contact.php">Contact</a></li>
            <li><a style="padding:0;margin:0;" id="basketHeaderHrefDhen" class="navigationHrefDhen" href="basket.php">
                    <img alt="Basket Icon" class="basketIconDhen"
                         src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDU5IDU5IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1OSA1OTsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTJweCIgaGVpZ2h0PSI1MTJweCI+CjxnPgoJPGc+CgkJPHBhdGggc3R5bGU9ImZpbGw6I0VDRjBGMTsiIGQ9Ik0xNSwzOS41bC01LjE2Ny0yN0g1OHYyMy4wMTJjMCwyLjIwMi0xLjc4NSwzLjk4OC0zLjk4OCwzLjk4OEgxNSIvPgoJCTxwYXRoIHN0eWxlPSJmaWxsOiM1NTYwODA7IiBkPSJNNTQuMDEzLDQwLjVoLTM5Ljg0bC01LjU1LTI5SDU5djI0LjAxM0M1OSwzOC4yNjMsNTYuNzYzLDQwLjUsNTQuMDEzLDQwLjV6IE0xNS44MjcsMzguNWgzOC4xODYgICAgQzU1LjY2LDM4LjUsNTcsMzcuMTYsNTcsMzUuNTEzVjEzLjVIMTEuMDQzTDE1LjgyNywzOC41eiIvPgoJPC9nPgoJPGc+CgkJPGNpcmNsZSBzdHlsZT0iZmlsbDojRkZGRkZGOyIgY3g9IjIyIiBjeT0iNDguNSIgcj0iNSIvPgoJCTxwYXRoIHN0eWxlPSJmaWxsOiM1NTYwODA7IiBkPSJNMjIsNTQuNWMtMy4zMDksMC02LTIuNjkxLTYtNnMyLjY5MS02LDYtNnM2LDIuNjkxLDYsNlMyNS4zMDksNTQuNSwyMiw1NC41eiBNMjIsNDQuNSAgICBjLTIuMjA2LDAtNCwxLjc5NC00LDRzMS43OTQsNCw0LDRzNC0xLjc5NCw0LTRTMjQuMjA2LDQ0LjUsMjIsNDQuNXoiLz4KCTwvZz4KCTxnPgoJCTxjaXJjbGUgc3R5bGU9ImZpbGw6I0ZGRkZGRjsiIGN4PSI0NSIgY3k9IjQ4LjUiIHI9IjUiLz4KCQk8cGF0aCBzdHlsZT0iZmlsbDojNTU2MDgwOyIgZD0iTTQ1LDU0LjVjLTMuMzA5LDAtNi0yLjY5MS02LTZzMi42OTEtNiw2LTZzNiwyLjY5MSw2LDZTNDguMzA5LDU0LjUsNDUsNTQuNXogTTQ1LDQ0LjUgICAgYy0yLjIwNiwwLTQsMS43OTQtNCw0czEuNzk0LDQsNCw0czQtMS43OTQsNC00UzQ3LjIwNiw0NC41LDQ1LDQ0LjV6Ii8+Cgk8L2c+Cgk8cGF0aCBzdHlsZT0iZmlsbDojNTU2MDgwOyIgZD0iTTU1LDQ4LjVoLTUuMTAxYy0wLjU1MywwLTEtMC40NDctMS0xczAuNDQ3LTEsMS0xSDU1YzAuNTUzLDAsMSwwLjQ0NywxLDFTNTUuNTUzLDQ4LjUsNTUsNDguNXoiLz4KCTxwYXRoIHN0eWxlPSJmaWxsOiM1NTYwODA7IiBkPSJNNDAuMTAxLDQ4LjVIMjYuODk5Yy0wLjU1MywwLTEtMC40NDctMS0xczAuNDQ3LTEsMS0xaDEzLjIwMWMwLjU1MywwLDEsMC40NDcsMSwxICAgUzQwLjY1Myw0OC41LDQwLjEwMSw0OC41eiIvPgoJPHBhdGggc3R5bGU9ImZpbGw6IzU1NjA4MDsiIGQ9Ik05LjgzMiwxMy41Yy0wLjQ4LDAtMC45MDQtMC4zNDctMC45ODUtMC44MzZMOC4xNTIsOC41SDZjLTAuNTUzLDAtMS0wLjQ0Ny0xLTFzMC40NDctMSwxLTFoMy44NDggICBsMC45NzIsNS44MzZjMC4wOTEsMC41NDUtMC4yNzcsMS4wNi0wLjgyMiwxLjE1QzkuOTQxLDEzLjQ5Niw5Ljg4NywxMy41LDkuODMyLDEzLjV6Ii8+Cgk8cGF0aCBzdHlsZT0iZmlsbDojNTU2MDgwOyIgZD0iTTU5LDIwLjVoLTl2LTlIMzl2OWgtN3YtOUgyMXY5SDEwLjM0N2wyLjEwNCwxMUgyMXY4Ljk5OGwxMS0wLjAwM1YzMS41aDd2OC45OTJsMTEtMC4wMDNWMzEuNWg5ICAgVjIwLjV6IE00MSwxMy41aDd2N2gtN1YxMy41eiBNNDgsMjIuNXY3aC03di03SDQ4eiBNMjMsMTMuNWg3djdoLTdWMTMuNXogTTMwLDIyLjV2N2gtN3YtN0gzMHogTTE0LjEwNCwyOS41bC0xLjM0LTdIMjF2N0gxNC4xMDR6ICAgIE0zMCwzOC40OTVsLTcsMC4wMDNWMzEuNWg3VjM4LjQ5NXogTTMyLDI5LjV2LTdoN3Y3SDMyeiBNNDgsMzguNDg5bC03LDAuMDAzVjMxLjVoN1YzOC40ODl6IE01NywyOS41aC03di03aDdWMjkuNXoiLz4KCTxwYXRoIHN0eWxlPSJmaWxsOiM1NTYwODA7IiBkPSJNMTcuMTAxLDQ4LjVIMTRjLTEuNDA2LDAtMi43NTgtMC42MDMtMy43MDctMS42NTJjLTAuOTQ3LTEuMDQ3LTEuNDA5LTIuNDUzLTEuMjY4LTMuODU4ICAgYzAuMjU1LTIuNTE4LDIuNTIyLTQuNDg5LDUuMTYzLTQuNDg5YzAuNTUzLDAsMSwwLjQ0NywxLDFzLTAuNDQ3LDEtMSwxYy0xLjYyNywwLTMuMDIxLDEuMTgyLTMuMTczLDIuNjkgICBjLTAuMDg3LDAuODU1LDAuMTg0LDEuNjc4LDAuNzYxLDIuMzE2QzEyLjM0OCw0Ni4xMzgsMTMuMTU4LDQ2LjUsMTQsNDYuNWgzLjEwMWMwLjU1MywwLDEsMC40NDcsMSwxUzE3LjY1Myw0OC41LDE3LjEwMSw0OC41eiIvPgoJPGNpcmNsZSBzdHlsZT0iZmlsbDojRTY0QzNDOyIgY3g9IjMiIGN5PSI3LjUiIHI9IjMiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K"/>
                </a>
            </li>
        </ul>
    </nav>
</header>