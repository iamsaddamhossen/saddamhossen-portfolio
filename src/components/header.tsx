import Image from "next/image";
import Link from "next/link";

export function Header() {
  return (
    <header className="w-full bg-white/95 backdrop-blur-md shadow-md sticky top-0 z-50">
      <div className="max-w-[1200px] mx-auto flex justify-between items-center py-4 px-4 md:px-8">
        {/* Logo */}
        <Link
          href="/"
          className="flex items-center space-x-2 transform transition-transform duration-200 hover:scale-105"
        >
          <Image
            src="/logo.svg"
            width={220}
            height={80}
            alt="Saddam Hossen"
            priority
          />
        </Link>

        {/* Navigation */}
        <nav>
          <ul className="flex gap-6 text-gray-700 font-medium">
            <li>
              <Link
                href="/about"
                className="hover:text-black relative after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-[2px] after:bg-[#0f4148] after:transition-all after:duration-300 hover:after:w-full"
              >
                About Saddam
              </Link>
            </li>
            <li>
              <Link
                href="/blog"
                className="hover:text-black relative after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-[2px] after:bg-[#0f4148] after:transition-all after:duration-300 hover:after:w-full"
              >
                Blog
              </Link>
            </li>
            <li>
              <Link
                href="/code-snippets"
                className="hover:text-black relative after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-[2px] after:bg-[#0f4148] after:transition-all after:duration-300 hover:after:w-full"
              >
                Code Snippets
              </Link>
            </li>
            <li>
              <Link
                href="/plugins"
                className="hover:text-black relative after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-[2px] after:bg-[#0f4148] after:transition-all after:duration-300 hover:after:w-full"
              >
                Plugins
              </Link>
            </li>
            <li>
              <Link
                href="/contact"
                className="hover:text-black relative after:absolute after:left-0 after:-bottom-1 after:w-0 after:h-[2px] after:bg-[#0f4148] after:transition-all after:duration-300 hover:after:w-full"
              >
                Contact
              </Link>
            </li>
          </ul>
        </nav>
      </div>
    </header>
  );
}
