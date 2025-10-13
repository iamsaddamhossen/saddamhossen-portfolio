import Image from "next/image";
import Link from "next/link";

export function Header() {
  return (
    <header className="flex justify-between mb-[66px] content-center">
      <div className="font-bold text-2xl">
        <Link href={"/"}>
          <Image
            src="/logo.svg"
            width={250}
            height={150}
            quality={70}
            alt="Saddam Hossen"
            loading="eager"
          />
        </Link>
      </div>

      <nav>
        <ul className="flex gap-4">
          <li>
            <Link href={"/about"}>About Saddam</Link>
          </li>
          <li>
            <Link href={"/blog"}>Blog</Link>
          </li>
          <li>
            <Link href={"/about"}>Code Snippets</Link>
          </li>
          <li>
            <Link href={"/contact"}>Contact</Link>
          </li>
        </ul>
      </nav>
    </header>
  );
}
