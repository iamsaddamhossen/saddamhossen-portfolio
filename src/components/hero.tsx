import Image from "next/image";
import Link from "next/link";

export function Hero() {
  return (
    <section className="relative w-full min-h-[50vh] md:min-h-[65vh] flex items-center overflow-hidden">
      {/* Full Background Image */}
      <Image
        src="/sh_hero.png"
        alt="Saddam Hossen WordPress Developer"
        fill
        className="object-cover object-top"
        priority
        quality={90}
      />

      {/* Layered Gradient Overlay */}
      <div className="absolute inset-0 bg-gradient-to-r from-[#0f4148]/95 via-[#0f4148]/70 to-[#0f4148]/0" />

      {/* Left Content */}
      <div className="relative z-10 max-w-[1200px] mx-auto w-full px-6 md:px-10 flex items-center">
        <div className="w-full md:w-3/5 text-left text-white flex flex-col justify-center">
          <h1 className="text-4xl md:text-5xl font-extrabold leading-tight drop-shadow-xl">
            Hi, I&apos;m <span className="text-white">Saddam Hossen</span>.
          </h1>

          <p className="mt-6 text-lg md:text-xl text-white/90 leading-relaxed max-w-[850px]">
            I craft fast, secure, and scalable WordPress websites that grow
            businesses online.
          </p>

          <p className="mt-4 text-lg md:text-xl text-white/90 leading-relaxed max-w-[850px]">
            With 9+ years of experience, I specialize in building custom themes,
            plugins, and solutions that are easy to manage, lightning-fast, and
            fully optimized.
          </p>

          <div className="mt-8 flex flex-wrap gap-4">
            <Link
              href="/contact"
              className="inline-flex items-center gap-2 bg-gradient-to-r from-[#23A7BF] to-[#1F9EB2] text-white font-semibold  px-6 py-3 shadow-lg hover:scale-105 transition-transform duration-300"
            >
              Let’s Talk
            </Link>

            <Link
              href="/#portfolio"
              className="self-center text-white/80 underline-offset-4 hover:underline font-medium"
            >
              View Portfolio
            </Link>
          </div>
        </div>
      </div>
    </section>
  );
}
