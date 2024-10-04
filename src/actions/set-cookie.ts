import { Cookies } from "react-cookie";

export function setUniCookie(token: string) {

    const cookie = new Cookies();

        cookie.set("cookieUni", token, { "path": '/', "maxAge": 3600, "sameSite": "none" })
}