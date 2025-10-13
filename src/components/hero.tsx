import Image from "next/image";

export function Hero() {
  return (
    <section className="relative w-full min-h-[70vh] flex items-center justify-center text-center overflow-hidden">
      {/* Background image */}
      <Image
        src="/hero.webp"
        alt="Saddam Hossen WordPress Developer"
        fill
        className="object-cover object-center brightness-75"
        priority
        quality={80}
      />

      {/* Overlay content */}
      <div className="relative z-10 max-w-[850px] px-6 text-white">
        <h1 className="font-semibold text-3xl md:text-5xl mb-4">
          Hi, I&apos;m Saddam Hossen.
        </h1>

        <p className="text-lg md:text-xl leading-relaxed opacity-90">
          I&apos;m a WordPress developer with over 9 years of experience
          building fast, secure, and easy-to-manage websites. I specialize in
          custom themes, plugins, and performance optimization for businesses
          that rely on WordPress.
        </p>
      </div>

      {/* Optional gradient overlay for readability */}
      <div className="absolute inset-0 bg-gradient-to-b from-black/50 to-black/70" />
    </section>
  );
}
